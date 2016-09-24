use strict;

my $input = 'colors.row';
open(my $input, '<', 'colors.raw') or die "Can not open input file $input: $!\n";

my %colors = ();
my $lineNumber = 1;
while (<$input>) {
	chomp($_);
	my @fields = split(/\t/, $_);
	10 == int(@fields) or die "Invalid input line $lineNumber - " . int(@fields) . "\n";
	my $colorName = $fields[0];
	my $colorCode = getColorCode($colorName);
	my $html        = $fields[1];
	my $red         = myChop($fields[2]);
	my $green       = myChop($fields[3]);
	my $blue        = myChop($fields[4]);
	my $hue         = myChop($fields[5]);
	my $saturation1 = myChop($fields[6]);
	my $light       = myChop($fields[7]);
	my $saturation2 = myChop($fields[8]);
	my $value       = myChop($fields[9]);
	
	$html =~ s/\s+//g;
	$colorName =~ s/\s+$//g;
	$colorName =~ s/\///g;
	$colorName =~ s/&//g;
	$colorName =~ s/\'/\\'/g;
	
	$colors{$colorName} = {
		code        => $colorCode,
		html        => $html,
		red         => $red,
		green       => $green,
		blue        => $blue,
		hue         => $hue,
		saturation1 => $saturation1,
		light       => $light,
		saturation2 => $saturation2,
		value       => $value
	};
}

close($input);

my @php = ();
my @methods = ();
foreach my $colorName (sort keys %colors) {
	
	my @data = ();
	my $colorCode   = $colors{$colorName}->{'code'};
	my $html        = $colors{$colorName}->{'html'};
	my $red         = $colors{$colorName}->{'red'};
	my $green       = $colors{$colorName}->{'green'};
	my $blue        = $colors{$colorName}->{'blue'};
	my $hue         = defined($colors{$colorName}->{'hue'}) ? $colors{$colorName}->{'hue'} : 'null';
	my $saturation1 = $colors{$colorName}->{'saturation1'};
	my $light       = $colors{$colorName}->{'light'};
	my $saturation2 = $colors{$colorName}->{'saturation2'};
	my $value       = $colors{$colorName}->{'value'};
	
	my $method = <<"EOT";
/**
 * Return the colour code for the colour "$colorName".
 * \@param string|null \$inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
 * \@return mixed The method returns the colour code for the given colour.
 */
static public function $colorCode(\$inOutputFormat=null) {
	return self::getColor('$colorCode', \$inOutputFormat);
}
EOT
	
	push(@methods, $method);
	
	push(@data, "\t\t'name'     => '$colorName'");
	push(@data, "\t\t'html'     => '$html'");
	push(@data, "\t\t'graphviz' => '$html'");
	push(@data, "\t\t'rgb'      => array($red, $green, $blue)");
	push(@data, "\t\t'hsl'      => array($hue, $saturation1, $light)");
	push(@data, "\t\t'hsv'      => array($hue, $saturation2, $value)");
	

	my @entry = ();
	push(@entry, "\t'$colorCode' => array(");
	push(@entry, join(",\n", @data));
	push(@entry, "\t)");
	
	push(@php, join("\n", @entry));
}


print join("\n", ('array(', join(",\n", @php), ');'));

print join("\n\n", @methods);









sub myChop {
	my ($inString) = @_;
	$inString =~ s/[^\d]//g;
	if (0 == length($inString)) {
		$inString = undef;
	}
	return $inString;
}

sub getColorCode {
	my ($colorName) = @_;
	my @tokens = ();
	$colorName =~ s/\(|\)|'//g;
	
	my @parts = map { lc $_; } split(/\s+|\-/, $colorName);
	push(@tokens, shift(@parts));
	push(@tokens, map { ucfirst($_); } @parts);
	return join("", @tokens);
}



