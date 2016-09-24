<?php

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use dbeurive\Color\Picker;

print 'HTML code for the color "Absolute Zero": ' . Picker::absoluteZero() . "\n";
print 'HTML code for the color "Aero Blue": ' . Picker::aeroBlue() . "\n";

print 'GraphViz code for the color "Absolute Zero": ' . Picker::absoluteZero('graphviz') . "\n";
print 'GraphViz code for the color "Aero Blue": ' . Picker::aeroBlue('graphviz') . "\n";

Picker::setDefaultOutputFormat('rgb');

print 'RGB triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
print 'RGB triplet for the color "Aero Blue": ' . print_r(Picker::aeroBlue(), true) . "\n";

Picker::setDefaultOutputFormat('hsl');

print 'HSL triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
print 'HSL triplet for the color "Aero Blue": ' . print_r(Picker::aeroBlue(), true) . "\n";

Picker::setDefaultOutputFormat('hsv');

print 'HSV triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
print 'HSV triplet for the color "Aero Blue": ' . print_r(Picker::aeroBlue(), true) . "\n";