# Introduction

This package implements a simple colour picker that allows the user to pick a colour by its name among a given list of colours.

The list of colours comes from [Wikipedia](https://en.wikipedia.org/wiki/List_of_colors:_A%E2%80%93F).

# Synopsis

```php
    use dbeurive\Color\Picker;

    print 'HTML code for the color "Absolute Zero": ' . Picker::absoluteZero() . "\n";
    print 'HTML code for the color "Aero Blue Zero": ' . Picker::aeroBlue() . "\n";

    print 'GraphViz code for the color "Absolute Zero": ' . Picker::absoluteZero('graphviz') . "\n";
    print 'GraphViz code for the color "Aero Blue Zero": ' . Picker::aeroBlue('graphviz') . "\n";

    Picker::setDefaultOutputFormat('rgb');

    print 'RGB triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
    print 'RGB triplet for the color "Aero Blue Zero": ' . print_r(Picker::aeroBlue(), true) . "\n";

    Picker::setDefaultOutputFormat('hsl');

    print 'HSL triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
    print 'HSL triplet for the color "Aero Blue Zero": ' . print_r(Picker::aeroBlue(), true) . "\n";

    Picker::setDefaultOutputFormat('hsv');

    print 'HSV triplet for the color "Absolute Zero": ' .  print_r(Picker::absoluteZero(), true) . "\n";
    print 'HSV triplet for the color "Aero Blue Zero": ' . print_r(Picker::aeroBlue(), true) . "\n";
```

Which will output:

```
HTML code for the color "Absolute Zero": #0048BA
HTML code for the color "Aero Blue Zero": #C9FFE5
GraphViz code for the color "Absolute Zero": #0048BA
GraphViz code for the color "Aero Blue Zero": #C9FFE5
RGB triplet for the color "Absolute Zero": Array
(
    [0] => 0
    [1] => 28
    [2] => 73
)

RGB triplet for the color "Aero Blue Zero": Array
(
    [0] => 79
    [1] => 100
    [2] => 90
)

HSL triplet for the color "Absolute Zero": Array
(
    [0] => 217
    [1] => 100
    [2] => 37
)

HSL triplet for the color "Aero Blue Zero": Array
(
    [0] => 151
    [1] => 100
    [2] => 89
)

HSV triplet for the color "Absolute Zero": Array
(
    [0] => 217
    [1] => 100
    [2] => 73
)

HSV triplet for the color "Aero Blue Zero": Array
(
    [0] => 151
    [1] => 21
    [2] => 100
)
```

# API

Colour codes come in multiple formats :

* "html". For example "#0048BA"
* "graphviz". For example "#0048BA"
* "rgb". For example array(120, 150, 0)
* "hsl". For example array(151, 100, 89)
* "hsv". For example array(151, 21, 100)

Note: see [Wikipedia](https://en.wikipedia.org/wiki/List_of_colors:_A%E2%80%93F) for details.

## Picker::setDefaultOutputFormat($inFormat)

Set the default output format. If not set, the default output format is 'html'. Valid formats' identifiers are:

* "html"
* "graphviz"
* "rgb"
* "hsl"
* "hsv"

## Colour's getters

| Name of the color                             | Method                         | HTML color code      |
| --------------------------------------------- | ------------------------------ | -------------------- |
| Absolute zero                                 | absoluteZero                   | #0048BA              |
| Acid green                                    | acidGreen                      | #B0BF1A              |
| Aero                                          | aero                           | #7CB9E8              |
| Aero blue                                     | aeroBlue                       | #C9FFE5              |
| African violet                                | africanViolet                  | #B284BE              |
| Air Force blue (RAF)                          | airForceBlueRaf                | #5D8AA8              |
| Air Force blue (USAF)                         | airForceBlueUsaf               | #00308F              |
| Air superiority blue                          | airSuperiorityBlue             | #72A0C1              |
| Alabama crimson                               | alabamaCrimson                 | #AF002A              |
| Alabaster                                     | alabaster                      | #F2F0E6              |
| Alice blue                                    | aliceBlue                      | #F0F8FF              |
| Alien Armpit                                  | alienArmpit                    | #84DE02              |
| Alizarin crimson                              | alizarinCrimson                | #E32636              |
| Alloy orange                                  | alloyOrange                    | #C46210              |
| Almond                                        | almond                         | #EFDECD              |
| Amaranth                                      | amaranth                       | #E52B50              |
| Amaranth deep purple                          | amaranthDeepPurple             | #9F2B68              |
| Amaranth pink                                 | amaranthPink                   | #F19CBB              |
| Amaranth purple                               | amaranthPurple                 | #AB274F              |
| Amaranth red                                  | amaranthRed                    | #D3212D              |
| Amazon                                        | amazon                         | #3B7A57              |
| Amazonite                                     | amazonite                      | #00C4B0              |
| Amber                                         | amber                          | #FFBF00              |
| Amber (SAE/ECE)                               | amberSaeEce                    | #FF7E00              |
| American rose                                 | americanRose                   | #FF033E              |
| Amethyst                                      | amethyst                       | #9966CC              |
| Android green                                 | androidGreen                   | #A4C639              |
| Anti-flash white                              | antiFlashWhite                 | #F2F3F4              |
| Antique brass                                 | antiqueBrass                   | #CD9575              |
| Antique bronze                                | antiqueBronze                  | #665D1E              |
| Antique fuchsia                               | antiqueFuchsia                 | #915C83              |
| Antique ruby                                  | antiqueRuby                    | #841B2D              |
| Antique white                                 | antiqueWhite                   | #FAEBD7              |
| Ao (English)                                  | aoEnglish                      | #008000              |
| Apple green                                   | appleGreen                     | #8DB600              |
| Apricot                                       | apricot                        | #FBCEB1              |
| Aqua                                          | aqua                           | #00FFFF              |
| Aquamarine                                    | aquamarine                     | #7FFFD4              |
| Arctic lime                                   | arcticLime                     | #D0FF14              |
| Army green                                    | armyGreen                      | #4B5320              |
| Arsenic                                       | arsenic                        | #3B444B              |
| Artichoke                                     | artichoke                      | #8F9779              |
| Arylide yellow                                | arylideYellow                  | #E9D66B              |
| Ash grey                                      | ashGrey                        | #B2BEB5              |
| Asparagus                                     | asparagus                      | #87A96B              |
| Atomic tangerine                              | atomicTangerine                | #FF9966              |
| Auburn                                        | auburn                         | #A52A2A              |
| Aureolin                                      | aureolin                       | #FDEE00              |
| AuroMetalSaurus                               | aurometalsaurus                | #6E7F80              |
| Avocado                                       | avocado                        | #568203              |
| Awesome                                       | awesome                        | #FF2052              |
| Aztec Gold                                    | aztecGold                      | #C39953              |
| Azure                                         | azure                          | #007FFF              |
| Azure (web color)                             | azureWebColor                  | #F0FFFF              |
| Azure mist                                    | azureMist                      | #F0FFFF              |
| Azureish white                                | azureishWhite                  | #DBE9F4              |
| B'dazzled blue                                | bdazzledBlue                   | #2E5894              |
| Baby blue                                     | babyBlue                       | #89CFF0              |
| Baby blue eyes                                | babyBlueEyes                   | #A1CAF1              |
| Baby pink                                     | babyPink                       | #F4C2C2              |
| Baby powder                                   | babyPowder                     | #FEFEFA              |
| Baker-Miller pink                             | bakerMillerPink                | #FF91AF              |
| Ball blue                                     | ballBlue                       | #21ABCD              |
| Banana Mania                                  | bananaMania                    | #FAE7B5              |
| Banana yellow                                 | bananaYellow                   | #FFE135              |
| Bangladesh green                              | bangladeshGreen                | #006A4E              |
| Barbie pink                                   | barbiePink                     | #E0218A              |
| Barn red                                      | barnRed                        | #7C0A02              |
| Battery Charged Blue                          | batteryChargedBlue             | #1DACD6              |
| Battleship grey                               | battleshipGrey                 | #848482              |
| Bazaar                                        | bazaar                         | #98777B              |
| Beau blue                                     | beauBlue                       | #BCD4E6              |
| Beaver                                        | beaver                         | #9F8170              |
| Begonia                                       | begonia                        | #FA6E79              |
| Beige                                         | beige                          | #F5F5DC              |
| Big Foot Feet                                 | bigFootFeet                    | #E88E5A              |
| Big dip o’ruby                              | bigDipO’ruby                 | #9C2542              |
| Bisque                                        | bisque                         | #FFE4C4              |
| Bistre                                        | bistre                         | #3D2B1F              |
| Bistre brown                                  | bistreBrown                    | #967117              |
| Bitter lemon                                  | bitterLemon                    | #CAE00D              |
| Bitter lime                                   | bitterLime                     | #BFFF00              |
| Bittersweet                                   | bittersweet                    | #FE6F5E              |
| Bittersweet shimmer                           | bittersweetShimmer             | #BF4F51              |
| Black                                         | black                          | #000000              |
| Black Coral                                   | blackCoral                     | #54626F              |
| Black Shadows                                 | blackShadows                   | #BFAFB2              |
| Black bean                                    | blackBean                      | #3D0C02              |
| Black leather jacket                          | blackLeatherJacket             | #253529              |
| Black olive                                   | blackOlive                     | #3B3C36              |
| Blanched almond                               | blanchedAlmond                 | #FFEBCD              |
| Blast-off bronze                              | blastOffBronze                 | #A57164              |
| Bleu de France                                | bleuDeFrance                   | #318CE7              |
| Blizzard Blue                                 | blizzardBlue                   | #ACE5EE              |
| Blond                                         | blond                          | #FAF0BE              |
| Blue                                          | blue                           | #0000FF              |
| Blue (Crayola)                                | blueCrayola                    | #1F75FE              |
| Blue (Munsell)                                | blueMunsell                    | #0093AF              |
| Blue (NCS)                                    | blueNcs                        | #0087BD              |
| Blue (Pantone)                                | bluePantone                    | #0018A8              |
| Blue (RYB)                                    | blueRyb                        | #0247FE              |
| Blue (pigment)                                | bluePigment                    | #333399              |
| Blue Bell                                     | blueBell                       | #A2A2D0              |
| Blue Bolt                                     | blueBolt                       | #00B9FB              |
| Blue Jeans                                    | blueJeans                      | #5DADEC              |
| Blue Lagoon                                   | blueLagoon                     | #ACE5EE              |
| Blue sapphire                                 | blueSapphire                   | #126180              |
| Blue yonder                                   | blueYonder                     | #5072A7              |
| Blue-gray                                     | blueGray                       | #6699CC              |
| Blue-green                                    | blueGreen                      | #0D98BA              |
| Blue-magenta violet                           | blueMagentaViolet              | #553592              |
| Blue-violet                                   | blueViolet                     | #8A2BE2              |
| Blueberry                                     | blueberry                      | #4F86F7              |
| Bluebonnet                                    | bluebonnet                     | #1C1CF0              |
| Blush                                         | blush                          | #DE5D83              |
| Bole                                          | bole                           | #79443B              |
| Bondi blue                                    | bondiBlue                      | #0095B6              |
| Bone                                          | bone                           | #E3DAC9              |
| Booger Buster                                 | boogerBuster                   | #DDE26A              |
| Boston University Red                         | bostonUniversityRed            | #CC0000              |
| Bottle green                                  | bottleGreen                    | #006A4E              |
| Boysenberry                                   | boysenberry                    | #873260              |
| Brandeis blue                                 | brandeisBlue                   | #0070FF              |
| Brass                                         | brass                          | #B5A642              |
| Brick red                                     | brickRed                       | #CB4154              |
| Bright Yellow (Crayola)                       | brightYellowCrayola            | #FFAA1D              |
| Bright cerulean                               | brightCerulean                 | #1DACD6              |
| Bright green                                  | brightGreen                    | #66FF00              |
| Bright lavender                               | brightLavender                 | #BF94E4              |
| Bright lilac                                  | brightLilac                    | #D891EF              |
| Bright maroon                                 | brightMaroon                   | #C32148              |
| Bright navy blue                              | brightNavyBlue                 | #1974D2              |
| Bright pink                                   | brightPink                     | #FF007F              |
| Bright turquoise                              | brightTurquoise                | #08E8DE              |
| Bright ube                                    | brightUbe                      | #D19FE8              |
| Brilliant azure                               | brilliantAzure                 | #3399FF              |
| Brilliant lavender                            | brilliantLavender              | #F4BBFF              |
| Brilliant rose                                | brilliantRose                  | #FF55A3              |
| Brink pink                                    | brinkPink                      | #FB607F              |
| British racing green                          | britishRacingGreen             | #004225              |
| Bronze                                        | bronze                         | #CD7F32              |
| Bronze Yellow                                 | bronzeYellow                   | #737000              |
| Brown (traditional)                           | brownTraditional               | #964B00              |
| Brown (web)                                   | brownWeb                       | #A52A2A              |
| Brown Sugar                                   | brownSugar                     | #AF6E4D              |
| Brown Yellow                                  | brownYellow                    | #cc9966              |
| Brown-nose                                    | brownNose                      | #6B4423              |
| Brunswick green                               | brunswickGreen                 | #1B4D3E              |
| Bubble gum                                    | bubbleGum                      | #FFC1CC              |
| Bubbles                                       | bubbles                        | #E7FEFF              |
| Bud green                                     | budGreen                       | #7BB661              |
| Buff                                          | buff                           | #F0DC82              |
| Bulgarian rose                                | bulgarianRose                  | #480607              |
| Burgundy                                      | burgundy                       | #800020              |
| Burlywood                                     | burlywood                      | #DEB887              |
| Burnished Brown                               | burnishedBrown                 | #A17A74              |
| Burnt orange                                  | burntOrange                    | #CC5500              |
| Burnt sienna                                  | burntSienna                    | #E97451              |
| Burnt umber                                   | burntUmber                     | #8A3324              |
| Byzantine                                     | byzantine                      | #BD33A4              |
| Byzantium                                     | byzantium                      | #702963              |
| CG Blue                                       | cgBlue                         | #007AA5              |
| CG Red                                        | cgRed                          | #E03C31              |
| Cadet                                         | cadet                          | #536872              |
| Cadet blue                                    | cadetBlue                      | #5F9EA0              |
| Cadet grey                                    | cadetGrey                      | #91A3B0              |
| Cadmium green                                 | cadmiumGreen                   | #006B3C              |
| Cadmium orange                                | cadmiumOrange                  | #ED872D              |
| Cadmium red                                   | cadmiumRed                     | #E30022              |
| Cadmium yellow                                | cadmiumYellow                  | #FFF600              |
| Café au lait                                 | caféAuLait                    | #A67B5B              |
| Café noir                                    | caféNoir                      | #4B3621              |
| Cal Poly Pomona green                         | calPolyPomonaGreen             | #1E4D2B              |
| Cambridge Blue                                | cambridgeBlue                  | #A3C1AD              |
| Camel                                         | camel                          | #C19A6B              |
| Cameo pink                                    | cameoPink                      | #EFBBCC              |
| Camouflage green                              | camouflageGreen                | #78866B              |
| Canary                                        | canary                         | #FFFF99              |
| Canary yellow                                 | canaryYellow                   | #FFEF00              |
| Candy apple red                               | candyAppleRed                  | #FF0800              |
| Candy pink                                    | candyPink                      | #E4717A              |
| Capri                                         | capri                          | #00BFFF              |
| Caput mortuum                                 | caputMortuum                   | #592720              |
| Cardinal                                      | cardinal                       | #C41E3A              |
| Caribbean green                               | caribbeanGreen                 | #00CC99              |
| Carmine                                       | carmine                        | #960018              |
| Carmine (M&P)                                 | carmineMp                      | #D70040              |
| Carmine pink                                  | carminePink                    | #EB4C42              |
| Carmine red                                   | carmineRed                     | #FF0038              |
| Carnation pink                                | carnationPink                  | #FFA6C9              |
| Carnelian                                     | carnelian                      | #B31B1B              |
| Carolina blue                                 | carolinaBlue                   | #56A0D3              |
| Carrot orange                                 | carrotOrange                   | #ED9121              |
| Castleton green                               | castletonGreen                 | #00563F              |
| Catalina blue                                 | catalinaBlue                   | #062A78              |
| Catawba                                       | catawba                        | #703642              |
| Cedar Chest                                   | cedarChest                     | #C95A49              |
| Ceil                                          | ceil                           | #92A1CF              |
| Celadon                                       | celadon                        | #ACE1AF              |
| Celadon blue                                  | celadonBlue                    | #007BA7              |
| Celadon green                                 | celadonGreen                   | #2F847C              |
| Celeste                                       | celeste                        | #B2FFFF              |
| Celestial blue                                | celestialBlue                  | #4997D0              |
| Cerise                                        | cerise                         | #DE3163              |
| Cerise pink                                   | cerisePink                     | #EC3B83              |
| Cerulean                                      | cerulean                       | #007BA7              |
| Cerulean blue                                 | ceruleanBlue                   | #2A52BE              |
| Cerulean frost                                | ceruleanFrost                  | #6D9BC3              |
| Chamoisee                                     | chamoisee                      | #A0785A              |
| Champagne                                     | champagne                      | #F7E7CE              |
| Champagne pink                                | champagnePink                  | #F1DDCF              |
| Charcoal                                      | charcoal                       | #36454F              |
| Charleston green                              | charlestonGreen                | #232B2B              |
| Charm pink                                    | charmPink                      | #E68FAC              |
| Chartreuse (traditional)                      | chartreuseTraditional          | #DFFF00              |
| Chartreuse (web)                              | chartreuseWeb                  | #7FFF00              |
| Cherry                                        | cherry                         | #DE3163              |
| Cherry blossom pink                           | cherryBlossomPink              | #FFB7C5              |
| Chestnut                                      | chestnut                       | #954535              |
| China pink                                    | chinaPink                      | #DE6FA1              |
| China rose                                    | chinaRose                      | #A8516E              |
| Chinese red                                   | chineseRed                     | #AA381E              |
| Chinese violet                                | chineseViolet                  | #856088              |
| Chlorophyll green                             | chlorophyllGreen               | #4AFF00              |
| Chocolate (traditional)                       | chocolateTraditional           | #7B3F00              |
| Chocolate (web)                               | chocolateWeb                   | #D2691E              |
| Chrome yellow                                 | chromeYellow                   | #FFA700              |
| Cinereous                                     | cinereous                      | #98817B              |
| Cinnabar                                      | cinnabar                       | #E34234              |
| Cinnamon Satin                                | cinnamonSatin                  | #CD607E              |
| Cinnamon[citation needed]                     | cinnamon                       | #D2691E              |
| Citrine                                       | citrine                        | #E4D00A              |
| Citron                                        | citron                         | #9FA91F              |
| Claret                                        | claret                         | #7F1734              |
| Classic rose                                  | classicRose                    | #FBCCE7              |
| Cobalt Blue                                   | cobaltBlue                     | #0047AB              |
| Cocoa brown                                   | cocoaBrown                     | #D2691E              |
| Coconut                                       | coconut                        | #965A3E              |
| Coffee                                        | coffee                         | #6F4E37              |
| Columbia Blue                                 | columbiaBlue                   | #C4D8E2              |
| Congo pink                                    | congoPink                      | #F88379              |
| Cool Black                                    | coolBlack                      | #002E63              |
| Cool grey                                     | coolGrey                       | #8C92AC              |
| Copper                                        | copper                         | #B87333              |
| Copper (Crayola)                              | copperCrayola                  | #DA8A67              |
| Copper penny                                  | copperPenny                    | #AD6F69              |
| Copper red                                    | copperRed                      | #CB6D51              |
| Copper rose                                   | copperRose                     | #996666              |
| Coquelicot                                    | coquelicot                     | #FF3800              |
| Coral                                         | coral                          | #FF7F50              |
| Coral Reef                                    | coralReef                      | #FD7C6E              |
| Coral pink                                    | coralPink                      | #F88379              |
| Coral red                                     | coralRed                       | #FF4040              |
| Cordovan                                      | cordovan                       | #893F45              |
| Corn                                          | corn                           | #FBEC5D              |
| Cornell Red                                   | cornellRed                     | #B31B1B              |
| Cornflower blue                               | cornflowerBlue                 | #6495ED              |
| Cornsilk                                      | cornsilk                       | #FFF8DC              |
| Cosmic Cobalt                                 | cosmicCobalt                   | #2E2D88              |
| Cosmic latte                                  | cosmicLatte                    | #FFF8E7              |
| Cotton candy                                  | cottonCandy                    | #FFBCD9              |
| Coyote brown                                  | coyoteBrown                    | #81613C              |
| Cream                                         | cream                          | #FFFDD0              |
| Crimson                                       | crimson                        | #DC143C              |
| Crimson glory                                 | crimsonGlory                   | #BE0032              |
| Crimson red                                   | crimsonRed                     | #990000              |
| Cultured                                      | cultured                       | #F5F5F5              |
| Cyan                                          | cyan                           | #00FFFF              |
| Cyan (process)                                | cyanProcess                    | #00B7EB              |
| Cyan azure                                    | cyanAzure                      | #4E82B4              |
| Cyan cobalt blue                              | cyanCobaltBlue                 | #28589C              |
| Cyan cornflower blue                          | cyanCornflowerBlue             | #188BC2              |
| Cyan-blue azure                               | cyanBlueAzure                  | #4682BF              |
| Cyber grape                                   | cyberGrape                     | #58427C              |
| Cyber yellow                                  | cyberYellow                    | #FFD300              |
| Cyclamen                                      | cyclamen                       | #F56FA1              |
| Daffodil                                      | daffodil                       | #FFFF31              |
| Dandelion                                     | dandelion                      | #F0E130              |
| Dark blue                                     | darkBlue                       | #00008B              |
| Dark blue-gray                                | darkBlueGray                   | #666699              |
| Dark brown                                    | darkBrown                      | #654321              |
| Dark brown-tangelo                            | darkBrownTangelo               | #88654E              |
| Dark byzantium                                | darkByzantium                  | #5D3954              |
| Dark candy apple red                          | darkCandyAppleRed              | #A40000              |
| Dark cerulean                                 | darkCerulean                   | #08457E              |
| Dark chestnut                                 | darkChestnut                   | #986960              |
| Dark coral                                    | darkCoral                      | #CD5B45              |
| Dark cyan                                     | darkCyan                       | #008B8B              |
| Dark electric blue                            | darkElectricBlue               | #536878              |
| Dark goldenrod                                | darkGoldenrod                  | #B8860B              |
| Dark gray (X11)                               | darkGrayX11                    | #A9A9A9              |
| Dark green                                    | darkGreen                      | #013220              |
| Dark green (X11)                              | darkGreenX11                   | #006400              |
| Dark gunmetal                                 | darkGunmetal                   | #1F262A              |
| Dark imperial blue                            | darkImperialBlue               | #00147E              |
| Dark jungle green                             | darkJungleGreen                | #1A2421              |
| Dark khaki                                    | darkKhaki                      | #BDB76B              |
| Dark lava                                     | darkLava                       | #483C32              |
| Dark lavender                                 | darkLavender                   | #734F96              |
| Dark liver                                    | darkLiver                      | #534B4F              |
| Dark liver (horses)                           | darkLiverHorses                | #543D37              |
| Dark magenta                                  | darkMagenta                    | #8B008B              |
| Dark medium gray                              | darkMediumGray                 | #A9A9A9              |
| Dark midnight blue                            | darkMidnightBlue               | #003366              |
| Dark moss green                               | darkMossGreen                  | #4A5D23              |
| Dark olive green                              | darkOliveGreen                 | #556B2F              |
| Dark orange                                   | darkOrange                     | #FF8C00              |
| Dark orchid                                   | darkOrchid                     | #9932CC              |
| Dark pastel blue                              | darkPastelBlue                 | #779ECB              |
| Dark pastel green                             | darkPastelGreen                | #03C03C              |
| Dark pastel purple                            | darkPastelPurple               | #966FD6              |
| Dark pastel red                               | darkPastelRed                  | #C23B22              |
| Dark pink                                     | darkPink                       | #E75480              |
| Dark powder blue                              | darkPowderBlue                 | #003399              |
| Dark puce                                     | darkPuce                       | #4F3A3C              |
| Dark purple                                   | darkPurple                     | #301934              |
| Dark raspberry                                | darkRaspberry                  | #872657              |
| Dark red                                      | darkRed                        | #8B0000              |
| Dark salmon                                   | darkSalmon                     | #E9967A              |
| Dark scarlet                                  | darkScarlet                    | #560319              |
| Dark sea green                                | darkSeaGreen                   | #8FBC8F              |
| Dark sienna                                   | darkSienna                     | #3C1414              |
| Dark sky blue                                 | darkSkyBlue                    | #8CBED6              |
| Dark slate blue                               | darkSlateBlue                  | #483D8B              |
| Dark slate gray                               | darkSlateGray                  | #2F4F4F              |
| Dark spring green                             | darkSpringGreen                | #177245              |
| Dark tan                                      | darkTan                        | #918151              |
| Dark tangerine                                | darkTangerine                  | #FFA812              |
| Dark taupe                                    | darkTaupe                      | #483C32              |
| Dark terra cotta                              | darkTerraCotta                 | #CC4E5C              |
| Dark turquoise                                | darkTurquoise                  | #00CED1              |
| Dark vanilla                                  | darkVanilla                    | #D1BEA8              |
| Dark violet                                   | darkViolet                     | #9400D3              |
| Dark yellow                                   | darkYellow                     | #9B870C              |
| Dartmouth green                               | dartmouthGreen                 | #00703C              |
| Davy's grey                                   | davysGrey                      | #555555              |
| Debian red                                    | debianRed                      | #D70A53              |
| Deep Green                                    | deepGreen                      | #056608              |
| Deep Red                                      | deepRed                        | #850101              |
| Deep Space Sparkle                            | deepSpaceSparkle               | #4A646C              |
| Deep Taupe                                    | deepTaupe                      | #7E5E60              |
| Deep Tuscan red                               | deepTuscanRed                  | #66424D              |
| Deep aquamarine                               | deepAquamarine                 | #40826D              |
| Deep carmine                                  | deepCarmine                    | #A9203E              |
| Deep carmine pink                             | deepCarminePink                | #EF3038              |
| Deep carrot orange                            | deepCarrotOrange               | #E9692C              |
| Deep cerise                                   | deepCerise                     | #DA3287              |
| Deep champagne                                | deepChampagne                  | #FAD6A5              |
| Deep chestnut                                 | deepChestnut                   | #B94E48              |
| Deep coffee                                   | deepCoffee                     | #704241              |
| Deep fuchsia                                  | deepFuchsia                    | #C154C1              |
| Deep green-cyan turquoise                     | deepGreenCyanTurquoise         | #0E7C61              |
| Deep jungle green                             | deepJungleGreen                | #004B49              |
| Deep koamaru                                  | deepKoamaru                    | #333366              |
| Deep lemon                                    | deepLemon                      | #F5C71A              |
| Deep lilac                                    | deepLilac                      | #9955BB              |
| Deep magenta                                  | deepMagenta                    | #CC00CC              |
| Deep maroon                                   | deepMaroon                     | #820000              |
| Deep mauve                                    | deepMauve                      | #D473D4              |
| Deep moss green                               | deepMossGreen                  | #355E3B              |
| Deep peach                                    | deepPeach                      | #FFCBA4              |
| Deep pink                                     | deepPink                       | #FF1493              |
| Deep puce                                     | deepPuce                       | #A95C68              |
| Deep ruby                                     | deepRuby                       | #843F5B              |
| Deep saffron                                  | deepSaffron                    | #FF9933              |
| Deep sky blue                                 | deepSkyBlue                    | #00BFFF              |
| Deep spring bud                               | deepSpringBud                  | #556B2F              |
| Deep violet                                   | deepViolet                     | #330066              |
| Deer                                          | deer                           | #BA8759              |
| Denim                                         | denim                          | #1560BD              |
| Denim Blue                                    | denimBlue                      | #2243B6              |
| Desaturated cyan                              | desaturatedCyan                | #669999              |
| Desert                                        | desert                         | #C19A6B              |
| Desert sand                                   | desertSand                     | #EDC9AF              |
| Desire                                        | desire                         | #EA3C53              |
| Diamond                                       | diamond                        | #B9F2FF              |
| Dim gray                                      | dimGray                        | #696969              |
| Dingy Dungeon                                 | dingyDungeon                   | #C53151              |
| Dirt                                          | dirt                           | #9B7653              |
| Dodger blue                                   | dodgerBlue                     | #1E90FF              |
| Dogwood rose                                  | dogwoodRose                    | #D71868              |
| Dollar bill                                   | dollarBill                     | #85BB65              |
| Dolphin Gray                                  | dolphinGray                    | #828E84              |
| Donkey brown                                  | donkeyBrown                    | #664C28              |
| Drab                                          | drab                           | #967117              |
| Duke blue                                     | dukeBlue                       | #00009C              |
| Dust storm                                    | dustStorm                      | #E5CCC9              |
| Dutch white                                   | dutchWhite                     | #EFDFBB              |
| Earth yellow                                  | earthYellow                    | #E1A95F              |
| Ebony                                         | ebony                          | #555D50              |
| Ecru                                          | ecru                           | #C2B280              |
| Eerie black                                   | eerieBlack                     | #1B1B1B              |
| Eggplant                                      | eggplant                       | #614051              |
| Eggshell                                      | eggshell                       | #F0EAD6              |
| Egyptian blue                                 | egyptianBlue                   | #1034A6              |
| Electric blue                                 | electricBlue                   | #7DF9FF              |
| Electric crimson                              | electricCrimson                | #FF003F              |
| Electric cyan                                 | electricCyan                   | #00FFFF              |
| Electric green                                | electricGreen                  | #00FF00              |
| Electric indigo                               | electricIndigo                 | #6F00FF              |
| Electric lavender                             | electricLavender               | #F4BBFF              |
| Electric lime                                 | electricLime                   | #CCFF00              |
| Electric purple                               | electricPurple                 | #BF00FF              |
| Electric ultramarine                          | electricUltramarine            | #3F00FF              |
| Electric violet                               | electricViolet                 | #8F00FF              |
| Electric yellow                               | electricYellow                 | #FFFF33              |
| Emerald                                       | emerald                        | #50C878              |
| Eminence                                      | eminence                       | #6C3082              |
| English green                                 | englishGreen                   | #1B4D3E              |
| English lavender                              | englishLavender                | #B48395              |
| English red                                   | englishRed                     | #AB4B52              |
| English vermillion                            | englishVermillion              | #CC474B              |
| English violet                                | englishViolet                  | #563C5C              |
| Eton blue                                     | etonBlue                       | #96C8A2              |
| Eucalyptus                                    | eucalyptus                     | #44D7A8              |
| Fallow                                        | fallow                         | #C19A6B              |
| Falu red                                      | faluRed                        | #801818              |
| Fandango                                      | fandango                       | #B53389              |
| Fandango pink                                 | fandangoPink                   | #DE5285              |
| Fashion fuchsia                               | fashionFuchsia                 | #F400A1              |
| Fawn                                          | fawn                           | #E5AA70              |
| Feldgrau                                      | feldgrau                       | #4D5D53              |
| Feldspar                                      | feldspar                       | #FDD5B1              |
| Fern green                                    | fernGreen                      | #4F7942              |
| Ferrari Red                                   | ferrariRed                     | #FF2800              |
| Field drab                                    | fieldDrab                      | #6C541E              |
| Fiery Rose                                    | fieryRose                      | #FF5470              |
| Fire engine red                               | fireEngineRed                  | #CE2029              |
| Firebrick                                     | firebrick                      | #B22222              |
| Flame                                         | flame                          | #E25822              |
| Flamingo pink                                 | flamingoPink                   | #FC8EAC              |
| Flattery                                      | flattery                       | #6B4423              |
| Flavescent                                    | flavescent                     | #F7E98E              |
| Flax                                          | flax                           | #EEDC82              |
| Flirt                                         | flirt                          | #A2006D              |
| Floral white                                  | floralWhite                    | #FFFAF0              |
| Fluorescent orange                            | fluorescentOrange              | #FFBF00              |
| Fluorescent pink                              | fluorescentPink                | #FF1493              |
| Fluorescent yellow                            | fluorescentYellow              | #CCFF00              |
| Folly                                         | folly                          | #FF004F              |
| Forest green (traditional)                    | forestGreenTraditional         | #014421              |
| Forest green (web)                            | forestGreenWeb                 | #228B22              |
| French beige                                  | frenchBeige                    | #A67B5B              |
| French bistre                                 | frenchBistre                   | #856D4D              |
| French blue                                   | frenchBlue                     | #0072BB              |
| French fuchsia                                | frenchFuchsia                  | #FD3F92              |
| French lilac                                  | frenchLilac                    | #86608E              |
| French lime                                   | frenchLime                     | #9EFD38              |
| French mauve                                  | frenchMauve                    | #D473D4              |
| French pink                                   | frenchPink                     | #FD6C9E              |
| French plum                                   | frenchPlum                     | #811453              |
| French puce                                   | frenchPuce                     | #4E1609              |
| French raspberry                              | frenchRaspberry                | #C72C48              |
| French rose                                   | frenchRose                     | #F64A8A              |
| French sky blue                               | frenchSkyBlue                  | #77B5FE              |
| French violet                                 | frenchViolet                   | #8806CE              |
| French wine                                   | frenchWine                     | #AC1E44              |
| Fresh Air                                     | freshAir                       | #A6E7FF              |
| Frostbite                                     | frostbite                      | #E936A7              |
| Fuchsia                                       | fuchsia                        | #FF00FF              |
| Fuchsia (Crayola)                             | fuchsiaCrayola                 | #C154C1              |
| Fuchsia pink                                  | fuchsiaPink                    | #FF77FF              |
| Fuchsia purple                                | fuchsiaPurple                  | #CC397B              |
| Fuchsia rose                                  | fuchsiaRose                    | #C74375              |
| Fulvous                                       | fulvous                        | #E48400              |
| Fuzzy Wuzzy                                   | fuzzyWuzzy                     | #CC6666              |
| GO green                                      | goGreen                        | #00AB66              |
| Gainsboro                                     | gainsboro                      | #DCDCDC              |
| Gamboge                                       | gamboge                        | #E49B0F              |
| Gamboge orange (brown)                        | gambogeOrangeBrown             | #996600              |
| Gargoyle Gas                                  | gargoyleGas                    | #FFDF46              |
| Generic viridian                              | genericViridian                | #007F66              |
| Ghost white                                   | ghostWhite                     | #F8F8FF              |
| Giant's Club                                  | giantsClub                     | #B05C52              |
| Giants orange                                 | giantsOrange                   | #FE5A1D              |
| Ginger                                        | ginger                         | #B06500              |
| Glaucous                                      | glaucous                       | #6082B6              |
| Glitter                                       | glitter                        | #E6E8FA              |
| Glossy Grape                                  | glossyGrape                    | #AB92B3              |
| Gold (metallic)                               | goldMetallic                   | #D4AF37              |
| Gold (web) (Golden)                           | goldWebGolden                  | #FFD700              |
| Gold Fusion                                   | goldFusion                     | #85754E              |
| Golden brown                                  | goldenBrown                    | #996515              |
| Golden poppy                                  | goldenPoppy                    | #FCC200              |
| Golden yellow                                 | goldenYellow                   | #FFDF00              |
| Goldenrod                                     | goldenrod                      | #DAA520              |
| Granite Gray                                  | graniteGray                    | #676767              |
| Granny Smith Apple                            | grannySmithApple               | #A8E4A0              |
| Grape                                         | grape                          | #6F2DA8              |
| Gray                                          | gray                           | #808080              |
| Gray (HTML/CSS gray)                          | grayHtmlCssGray                | #808080              |
| Gray (X11 gray)                               | grayX11Gray                    | #BEBEBE              |
| Gray-asparagus                                | grayAsparagus                  | #465945              |
| Gray-blue                                     | grayBlue                       | #8C92AC              |
| Green (Color Wheel) (X11 green)               | greenColorWheelX11Green        | #00FF00              |
| Green (Crayola)                               | greenCrayola                   | #1CAC78              |
| Green (HTML/CSS color)                        | greenHtmlCssColor              | #008000              |
| Green (Munsell)                               | greenMunsell                   | #00A877              |
| Green (NCS)                                   | greenNcs                       | #009F6B              |
| Green (Pantone)                               | greenPantone                   | #00AD43              |
| Green (RYB)                                   | greenRyb                       | #66B032              |
| Green (pigment)                               | greenPigment                   | #00A550              |
| Green Lizard                                  | greenLizard                    | #A7F432              |
| Green Sheen                                   | greenSheen                     | #6EAEA1              |
| Green-blue                                    | greenBlue                      | #1164B4              |
| Green-cyan                                    | greenCyan                      | #009966              |
| Green-yellow                                  | greenYellow                    | #ADFF2F              |
| Grizzly                                       | grizzly                        | #885818              |
| Grullo                                        | grullo                         | #A99A86              |
| Gunmetal                                      | gunmetal                       | #2a3439              |
| Guppie green                                  | guppieGreen                    | #00FF7F              |
| Halayà úbe                                  | halayàúbe                    | #663854              |
| Han blue                                      | hanBlue                        | #446CCF              |
| Han purple                                    | hanPurple                      | #5218FA              |
| Hansa yellow                                  | hansaYellow                    | #E9D66B              |
| Harlequin                                     | harlequin                      | #3FFF00              |
| Harlequin green                               | harlequinGreen                 | #46CB18              |
| Harvard crimson                               | harvardCrimson                 | #C90016              |
| Harvest gold                                  | harvestGold                    | #DA9100              |
| Heart Gold                                    | heartGold                      | #808000              |
| Heat Wave                                     | heatWave                       | #FF7A00              |
| Heidelberg Red[2]                             | heidelbergRed2                 | #960018              |
| Heliotrope                                    | heliotrope                     | #DF73FF              |
| Heliotrope gray                               | heliotropeGray                 | #AA98A9              |
| Heliotrope magenta                            | heliotropeMagenta              | #AA00BB              |
| Hollywood cerise                              | hollywoodCerise                | #F400A1              |
| Honeydew                                      | honeydew                       | #F0FFF0              |
| Honolulu blue                                 | honoluluBlue                   | #006DB0              |
| Hooker's green                                | hookersGreen                   | #49796B              |
| Hot magenta                                   | hotMagenta                     | #FF1DCE              |
| Hot pink                                      | hotPink                        | #FF69B4              |
| Hunter green                                  | hunterGreen                    | #355E3B              |
| Iceberg                                       | iceberg                        | #71A6D2              |
| Icterine                                      | icterine                       | #FCF75E              |
| Iguana Green                                  | iguanaGreen                    | #71BC78              |
| Illuminating Emerald                          | illuminatingEmerald            | #319177              |
| Imperial                                      | imperial                       | #602F6B              |
| Imperial blue                                 | imperialBlue                   | #002395              |
| Imperial purple                               | imperialPurple                 | #66023C              |
| Imperial red                                  | imperialRed                    | #ED2939              |
| Inchworm                                      | inchworm                       | #B2EC5D              |
| Independence                                  | independence                   | #4C516D              |
| India green                                   | indiaGreen                     | #138808              |
| Indian red                                    | indianRed                      | #CD5C5C              |
| Indian yellow                                 | indianYellow                   | #E3A857              |
| Indigo                                        | indigo                         | #4B0082              |
| Indigo (web)                                  | indigoWeb                      | #4B0082              |
| Indigo dye                                    | indigoDye                      | #091F92              |
| Infra Red                                     | infraRed                       | #FF496C              |
| Interdimensional Blue                         | interdimensionalBlue           | #360CCC              |
| International Klein Blue                      | internationalKleinBlue         | #002FA7              |
| International orange (Golden Gate Bridge)     | internationalOrangeGoldenGateBridge | #C0362C              |
| International orange (aerospace)              | internationalOrangeAerospace   | #FF4F00              |
| International orange (engineering)            | internationalOrangeEngineering | #BA160C              |
| Iris                                          | iris                           | #5A4FCF              |
| Irresistible                                  | irresistible                   | #B3446C              |
| Isabelline                                    | isabelline                     | #F4F0EC              |
| Islamic green                                 | islamicGreen                   | #009000              |
| Italian sky blue                              | italianSkyBlue                 | #B2FFFF              |
| Ivory                                         | ivory                          | #FFFFF0              |
| Jade                                          | jade                           | #00A86B              |
| Japanese carmine                              | japaneseCarmine                | #9D2933              |
| Japanese indigo                               | japaneseIndigo                 | #264348              |
| Japanese violet                               | japaneseViolet                 | #5B3256              |
| Jasmine                                       | jasmine                        | #F8DE7E              |
| Jasper                                        | jasper                         | #D73B3E              |
| Jazzberry jam                                 | jazzberryJam                   | #A50B5E              |
| Jelly Bean                                    | jellyBean                      | #DA614E              |
| Jet                                           | jet                            | #343434              |
| Jonquil                                       | jonquil                        | #F4CA16              |
| Jordy blue                                    | jordyBlue                      | #8AB9F1              |
| June bud                                      | juneBud                        | #BDDA57              |
| Jungle green                                  | jungleGreen                    | #29AB87              |
| KSU Purple                                    | ksuPurple                      | #512888              |
| KU Crimson                                    | kuCrimson                      | #E8000D              |
| Kelly green                                   | kellyGreen                     | #4CBB17              |
| Kenyan copper                                 | kenyanCopper                   | #7C1C05              |
| Keppel                                        | keppel                         | #3AB09E              |
| Key Lime                                      | keyLime                        | #E8F48C              |
| Khaki (HTML/CSS) (Khaki)                      | khakiHtmlCssKhaki              | #C3B091              |
| Khaki (X11) (Light khaki)                     | khakiX11LightKhaki             | #F0E68C              |
| Kiwi                                          | kiwi                           | #8EE53F              |
| Kobe                                          | kobe                           | #882D17              |
| Kobi                                          | kobi                           | #E79FC4              |
| Kobicha                                       | kobicha                        | #6B4423              |
| Kombu green                                   | kombuGreen                     | #354230              |
| La Salle Green                                | laSalleGreen                   | #087830              |
| Languid lavender                              | languidLavender                | #D6CADD              |
| Lapis lazuli                                  | lapisLazuli                    | #26619C              |
| Laser Lemon                                   | laserLemon                     | #FFFF66              |
| Laurel green                                  | laurelGreen                    | #A9BA9D              |
| Lava                                          | lava                           | #CF1020              |
| Lavender (floral)                             | lavenderFloral                 | #B57EDC              |
| Lavender (web)                                | lavenderWeb                    | #E6E6FA              |
| Lavender blue                                 | lavenderBlue                   | #CCCCFF              |
| Lavender blush                                | lavenderBlush                  | #FFF0F5              |
| Lavender gray                                 | lavenderGray                   | #C4C3D0              |
| Lavender indigo                               | lavenderIndigo                 | #9457EB              |
| Lavender magenta                              | lavenderMagenta                | #EE82EE              |
| Lavender mist                                 | lavenderMist                   | #E6E6FA              |
| Lavender pink                                 | lavenderPink                   | #FBAED2              |
| Lavender purple                               | lavenderPurple                 | #967BB6              |
| Lavender rose                                 | lavenderRose                   | #FBA0E3              |
| Lawn green                                    | lawnGreen                      | #7CFC00              |
| Lemon                                         | lemon                          | #FFF700              |
| Lemon chiffon                                 | lemonChiffon                   | #FFFACD              |
| Lemon curry                                   | lemonCurry                     | #CCA01D              |
| Lemon glacier                                 | lemonGlacier                   | #FDFF00              |
| Lemon lime                                    | lemonLime                      | #E3FF00              |
| Lemon meringue                                | lemonMeringue                  | #F6EABE              |
| Lemon yellow                                  | lemonYellow                    | #FFF44F              |
| Liberty                                       | liberty                        | #545AA7              |
| Licorice                                      | licorice                       | #1A1110              |
| Light French beige                            | lightFrenchBeige               | #C8AD7F              |
| Light Thulian pink                            | lightThulianPink               | #E68FAC              |
| Light apricot                                 | lightApricot                   | #FDD5B1              |
| Light blue                                    | lightBlue                      | #ADD8E6              |
| Light brown                                   | lightBrown                     | #B5651D              |
| Light carmine pink                            | lightCarminePink               | #E66771              |
| Light cobalt blue                             | lightCobaltBlue                | #88ACE0              |
| Light coral                                   | lightCoral                     | #F08080              |
| Light cornflower blue                         | lightCornflowerBlue            | #93CCEA              |
| Light crimson                                 | lightCrimson                   | #F56991              |
| Light cyan                                    | lightCyan                      | #E0FFFF              |
| Light deep pink                               | lightDeepPink                  | #FF5CCD              |
| Light fuchsia pink                            | lightFuchsiaPink               | #F984EF              |
| Light goldenrod yellow                        | lightGoldenrodYellow           | #FAFAD2              |
| Light gray                                    | lightGray                      | #D3D3D3              |
| Light grayish magenta                         | lightGrayishMagenta            | #CC99CC              |
| Light green                                   | lightGreen                     | #90EE90              |
| Light hot pink                                | lightHotPink                   | #FFB3DE              |
| Light khaki                                   | lightKhaki                     | #F0E68C              |
| Light medium orchid                           | lightMediumOrchid              | #D39BCB              |
| Light moss green                              | lightMossGreen                 | #ADDFAD              |
| Light orchid                                  | lightOrchid                    | #E6A8D7              |
| Light pastel purple                           | lightPastelPurple              | #B19CD9              |
| Light pink                                    | lightPink                      | #FFB6C1              |
| Light red ochre                               | lightRedOchre                  | #E97451              |
| Light salmon                                  | lightSalmon                    | #FFA07A              |
| Light salmon pink                             | lightSalmonPink                | #FF9999              |
| Light sea green                               | lightSeaGreen                  | #20B2AA              |
| Light sky blue                                | lightSkyBlue                   | #87CEFA              |
| Light slate gray                              | lightSlateGray                 | #778899              |
| Light steel blue                              | lightSteelBlue                 | #B0C4DE              |
| Light taupe                                   | lightTaupe                     | #B38B6D              |
| Light yellow                                  | lightYellow                    | #FFFFE0              |
| Lilac                                         | lilac                          | #C8A2C8              |
| Lilac Luster                                  | lilacLuster                    | #AE98AA              |
| Lime (color wheel)                            | limeColorWheel                 | #BFFF00              |
| Lime (web) (X11 green)                        | limeWebX11Green                | #00FF00              |
| Lime green                                    | limeGreen                      | #32CD32              |
| Limerick                                      | limerick                       | #9DC209              |
| Lincoln green                                 | lincolnGreen                   | #195905              |
| Linen                                         | linen                          | #FAF0E6              |
| Lion                                          | lion                           | #C19A6B              |
| Liseran Purple                                | liseranPurple                  | #DE6FA1              |
| Little boy blue                               | littleBoyBlue                  | #6CA0DC              |
| Liver                                         | liver                          | #674C47              |
| Liver (dogs)                                  | liverDogs                      | #B86D29              |
| Liver (organ)                                 | liverOrgan                     | #6C2E1F              |
| Liver chestnut                                | liverChestnut                  | #987456              |
| Livid                                         | livid                          | #6699CC              |
| Lumber                                        | lumber                         | #FFE4CD              |
| Lust                                          | lust                           | #E62020              |
| MSU Green                                     | msuGreen                       | #18453B              |
| Maastricht Blue                               | maastrichtBlue                 | #001C3D              |
| Macaroni and Cheese                           | macaroniAndCheese              | #FFBD88              |
| Madder Lake                                   | madderLake                     | #CC3336              |
| Magenta                                       | magenta                        | #FF00FF              |
| Magenta (Crayola)                             | magentaCrayola                 | #FF55A3              |
| Magenta (Pantone)                             | magentaPantone                 | #D0417E              |
| Magenta (dye)                                 | magentaDye                     | #CA1F7B              |
| Magenta (process)                             | magentaProcess                 | #FF0090              |
| Magenta haze                                  | magentaHaze                    | #9F4576              |
| Magenta-pink                                  | magentaPink                    | #CC338B              |
| Magic Potion                                  | magicPotion                    | #FF4466              |
| Magic mint                                    | magicMint                      | #AAF0D1              |
| Magnolia                                      | magnolia                       | #F8F4FF              |
| Mahogany                                      | mahogany                       | #C04000              |
| Maize                                         | maize                          | #FBEC5D              |
| Majorelle Blue                                | majorelleBlue                  | #6050DC              |
| Malachite                                     | malachite                      | #0BDA51              |
| Manatee                                       | manatee                        | #979AAA              |
| Mandarin                                      | mandarin                       | #F37A48              |
| Mango Tango                                   | mangoTango                     | #FF8243              |
| Mantis                                        | mantis                         | #74C365              |
| Mardi Gras                                    | mardiGras                      | #880085              |
| Marigold                                      | marigold                       | #EAA221              |
| Maroon (Crayola)                              | maroonCrayola                  | #C32148              |
| Maroon (HTML/CSS)                             | maroonHtmlCss                  | #800000              |
| Maroon (X11)                                  | maroonX11                      | #B03060              |
| Mauve                                         | mauve                          | #E0B0FF              |
| Mauve taupe                                   | mauveTaupe                     | #915F6D              |
| Mauvelous                                     | mauvelous                      | #EF98AA              |
| Maximum Blue                                  | maximumBlue                    | #47ABCC              |
| Maximum Blue Green                            | maximumBlueGreen               | #30BFBF              |
| Maximum Blue Purple                           | maximumBluePurple              | #ACACE6              |
| Maximum Green                                 | maximumGreen                   | #5E8C31              |
| Maximum Green Yellow                          | maximumGreenYellow             | #D9E650              |
| Maximum Purple                                | maximumPurple                  | #733380              |
| Maximum Red                                   | maximumRed                     | #D92121              |
| Maximum Red Purple                            | maximumRedPurple               | #A63A79              |
| Maximum Yellow                                | maximumYellow                  | #FAFA37              |
| Maximum Yellow Red                            | maximumYellowRed               | #F2BA49              |
| May green                                     | mayGreen                       | #4C9141              |
| Maya blue                                     | mayaBlue                       | #73C2FB              |
| Meat brown                                    | meatBrown                      | #E5B73B              |
| Medium Persian blue                           | mediumPersianBlue              | #0067A5              |
| Medium Tuscan red                             | mediumTuscanRed                | #79443B              |
| Medium aquamarine                             | mediumAquamarine               | #66DDAA              |
| Medium blue                                   | mediumBlue                     | #0000CD              |
| Medium candy apple red                        | mediumCandyAppleRed            | #E2062C              |
| Medium carmine                                | mediumCarmine                  | #AF4035              |
| Medium champagne                              | mediumChampagne                | #F3E5AB              |
| Medium electric blue                          | mediumElectricBlue             | #035096              |
| Medium jungle green                           | mediumJungleGreen              | #1C352D              |
| Medium lavender magenta                       | mediumLavenderMagenta          | #DDA0DD              |
| Medium orchid                                 | mediumOrchid                   | #BA55D3              |
| Medium purple                                 | mediumPurple                   | #9370DB              |
| Medium red-violet                             | mediumRedViolet                | #BB3385              |
| Medium ruby                                   | mediumRuby                     | #AA4069              |
| Medium sea green                              | mediumSeaGreen                 | #3CB371              |
| Medium sky blue                               | mediumSkyBlue                  | #80DAEB              |
| Medium slate blue                             | mediumSlateBlue                | #7B68EE              |
| Medium spring bud                             | mediumSpringBud                | #C9DC87              |
| Medium spring green                           | mediumSpringGreen              | #00FA9A              |
| Medium taupe                                  | mediumTaupe                    | #674C47              |
| Medium turquoise                              | mediumTurquoise                | #48D1CC              |
| Medium vermilion                              | mediumVermilion                | #D9603B              |
| Medium violet-red                             | mediumVioletRed                | #C71585              |
| Mellow apricot                                | mellowApricot                  | #F8B878              |
| Mellow yellow                                 | mellowYellow                   | #F8DE7E              |
| Melon                                         | melon                          | #FDBCB4              |
| Metallic Seaweed                              | metallicSeaweed                | #0A7E8C              |
| Metallic Sunburst                             | metallicSunburst               | #9C7C38              |
| Mexican pink                                  | mexicanPink                    | #E4007C              |
| Middle Blue                                   | middleBlue                     | #7ED4E6              |
| Middle Blue Green                             | middleBlueGreen                | #8DD9CC              |
| Middle Blue Purple                            | middleBluePurple               | #8B72BE              |
| Middle Green                                  | middleGreen                    | #4D8C57              |
| Middle Green Yellow                           | middleGreenYellow              | #ACBF60              |
| Middle Purple                                 | middlePurple                   | #D982B5              |
| Middle Red                                    | middleRed                      | #E58E73              |
| Middle Red Purple                             | middleRedPurple                | #A55353              |
| Middle Yellow                                 | middleYellow                   | #FFEB00              |
| Middle Yellow Red                             | middleYellowRed                | #ECB176              |
| Midnight                                      | midnight                       | #702670              |
| Midnight blue                                 | midnightBlue                   | #191970              |
| Midnight green (eagle green)                  | midnightGreenEagleGreen        | #004953              |
| Mikado yellow                                 | mikadoYellow                   | #FFC40C              |
| Mimi Pink                                     | mimiPink                       | #FFDAE9              |
| Mindaro                                       | mindaro                        | #E3F988              |
| Ming                                          | ming                           | #36747D              |
| Minion Yellow                                 | minionYellow                   | #F5E050              |
| Mint                                          | mint                           | #3EB489              |
| Mint cream                                    | mintCream                      | #F5FFFA              |
| Mint green                                    | mintGreen                      | #98FF98              |
| Misty Moss                                    | mistyMoss                      | #BBB477              |
| Misty rose                                    | mistyRose                      | #FFE4E1              |
| Moccasin                                      | moccasin                       | #FAEBD7              |
| Mode beige                                    | modeBeige                      | #967117              |
| Moonstone blue                                | moonstoneBlue                  | #73A9C2              |
| Mordant red 19                                | mordantRed19                   | #AE0C00              |
| Moss green                                    | mossGreen                      | #8A9A5B              |
| Mountain Meadow                               | mountainMeadow                 | #30BA8F              |
| Mountbatten pink                              | mountbattenPink                | #997A8D              |
| Mughal green                                  | mughalGreen                    | #306030              |
| Mulberry                                      | mulberry                       | #C54B8C              |
| Mummy's Tomb                                  | mummysTomb                     | #828E84              |
| Mustard                                       | mustard                        | #FFDB58              |
| Myrtle green                                  | myrtleGreen                    | #317873              |
| Mystic                                        | mystic                         | #D65282              |
| Mystic Maroon                                 | mysticMaroon                   | #AD4379              |
| Nadeshiko pink                                | nadeshikoPink                  | #F6ADC6              |
| Napier green                                  | napierGreen                    | #2A8000              |
| Naples yellow                                 | naplesYellow                   | #FADA5E              |
| Navajo white                                  | navajoWhite                    | #FFDEAD              |
| Navy                                          | navy                           | #000080              |
| Navy purple                                   | navyPurple                     | #9457EB              |
| Neon Carrot                                   | neonCarrot                     | #FFA343              |
| Neon fuchsia                                  | neonFuchsia                    | #FE4164              |
| Neon green                                    | neonGreen                      | #39FF14              |
| New Car                                       | newCar                         | #214FC6              |
| New York pink                                 | newYorkPink                    | #D7837F              |
| Nickel                                        | nickel                         | #727472              |
| Non-photo blue                                | nonPhotoBlue                   | #A4DDED              |
| North Texas Green                             | northTexasGreen                | #059033              |
| Nyanza                                        | nyanza                         | #E9FFDB              |
| OU Crimson Red                                | ouCrimsonRed                   | #990000              |
| Ocean Blue                                    | oceanBlue                      | #4F42B5              |
| Ocean Boat Blue                               | oceanBoatBlue                  | #0077BE              |
| Ocean Green                                   | oceanGreen                     | #48BF91              |
| Ochre                                         | ochre                          | #CC7722              |
| Office green                                  | officeGreen                    | #008000              |
| Ogre Odor                                     | ogreOdor                       | #FD5240              |
| Old burgundy                                  | oldBurgundy                    | #43302E              |
| Old gold                                      | oldGold                        | #CFB53B              |
| Old heliotrope                                | oldHeliotrope                  | #563C5C              |
| Old lace                                      | oldLace                        | #FDF5E6              |
| Old lavender                                  | oldLavender                    | #796878              |
| Old mauve                                     | oldMauve                       | #673147              |
| Old moss green                                | oldMossGreen                   | #867E36              |
| Old rose                                      | oldRose                        | #C08081              |
| Old silver                                    | oldSilver                      | #848482              |
| Olive                                         | olive                          | #808000              |
| Olive Drab #7                                 | oliveDrab7                     | #3C341F              |
| Olive Drab (#3)                               | oliveDrab3                     | #6B8E23              |
| Olivine                                       | olivine                        | #9AB973              |
| Onyx                                          | onyx                           | #353839              |
| Opera mauve                                   | operaMauve                     | #B784A7              |
| Orange (Crayola)                              | orangeCrayola                  | #FF7538              |
| Orange (Pantone)                              | orangePantone                  | #FF5800              |
| Orange (RYB)                                  | orangeRyb                      | #FB9902              |
| Orange (color wheel)                          | orangeColorWheel               | #FF7F00              |
| Orange (web)                                  | orangeWeb                      | #FFA500              |
| Orange Soda                                   | orangeSoda                     | #FA5B3D              |
| Orange peel                                   | orangePeel                     | #FF9F00              |
| Orange-red                                    | orangeRed                      | #FF4500              |
| Orange-yellow                                 | orangeYellow                   | #F8D568              |
| Orchid                                        | orchid                         | #DA70D6              |
| Orchid pink                                   | orchidPink                     | #F2BDCD              |
| Orioles orange                                | oriolesOrange                  | #FB4F14              |
| Otter brown                                   | otterBrown                     | #654321              |
| Outer Space                                   | outerSpace                     | #414A4C              |
| Outrageous Orange                             | outrageousOrange               | #FF6E4A              |
| Oxford Blue                                   | oxfordBlue                     | #002147              |
| Pacific Blue                                  | pacificBlue                    | #1CA9C9              |
| Pakistan green                                | pakistanGreen                  | #006600              |
| Palatinate blue                               | palatinateBlue                 | #273BE2              |
| Palatinate purple                             | palatinatePurple               | #682860              |
| Pale aqua                                     | paleAqua                       | #BCD4E6              |
| Pale blue                                     | paleBlue                       | #AFEEEE              |
| Pale brown                                    | paleBrown                      | #987654              |
| Pale carmine                                  | paleCarmine                    | #AF4035              |
| Pale cerulean                                 | paleCerulean                   | #9BC4E2              |
| Pale chestnut                                 | paleChestnut                   | #DDADAF              |
| Pale copper                                   | paleCopper                     | #DA8A67              |
| Pale cornflower blue                          | paleCornflowerBlue             | #ABCDEF              |
| Pale cyan                                     | paleCyan                       | #87D3F8              |
| Pale gold                                     | paleGold                       | #E6BE8A              |
| Pale goldenrod                                | paleGoldenrod                  | #EEE8AA              |
| Pale green                                    | paleGreen                      | #98FB98              |
| Pale lavender                                 | paleLavender                   | #DCD0FF              |
| Pale magenta                                  | paleMagenta                    | #F984E5              |
| Pale magenta-pink                             | paleMagentaPink                | #FF99CC              |
| Pale pink                                     | palePink                       | #FADADD              |
| Pale plum                                     | palePlum                       | #DDA0DD              |
| Pale red-violet                               | paleRedViolet                  | #DB7093              |
| Pale robin egg blue                           | paleRobinEggBlue               | #96DED1              |
| Pale silver                                   | paleSilver                     | #C9C0BB              |
| Pale spring bud                               | paleSpringBud                  | #ECEBBD              |
| Pale taupe                                    | paleTaupe                      | #BC987E              |
| Pale turquoise                                | paleTurquoise                  | #AFEEEE              |
| Pale violet                                   | paleViolet                     | #CC99FF              |
| Pale violet-red                               | paleVioletRed                  | #DB7093              |
| Palm Leaf                                     | palmLeaf                       | #6F9940              |
| Pansy purple                                  | pansyPurple                    | #78184A              |
| Paolo Veronese green                          | paoloVeroneseGreen             | #009B7D              |
| Papaya whip                                   | papayaWhip                     | #FFEFD5              |
| Paradise pink                                 | paradisePink                   | #E63E62              |
| Paris Green                                   | parisGreen                     | #50C878              |
| Parrot Pink                                   | parrotPink                     | #D998A0              |
| Pastel blue                                   | pastelBlue                     | #AEC6CF              |
| Pastel brown                                  | pastelBrown                    | #836953              |
| Pastel gray                                   | pastelGray                     | #CFCFC4              |
| Pastel green                                  | pastelGreen                    | #77DD77              |
| Pastel magenta                                | pastelMagenta                  | #F49AC2              |
| Pastel orange                                 | pastelOrange                   | #FFB347              |
| Pastel pink                                   | pastelPink                     | #DEA5A4              |
| Pastel purple                                 | pastelPurple                   | #B39EB5              |
| Pastel red                                    | pastelRed                      | #FF6961              |
| Pastel violet                                 | pastelViolet                   | #CB99C9              |
| Pastel yellow                                 | pastelYellow                   | #FDFD96              |
| Patriarch                                     | patriarch                      | #800080              |
| Payne's grey                                  | paynesGrey                     | #536878              |
| Peach                                         | peach                          | #FFCBA4              |
| Peach puff                                    | peachPuff                      | #FFDAB9              |
| Peach-orange                                  | peachOrange                    | #FFCC99              |
| Peach-yellow                                  | peachYellow                    | #FADFAD              |
| Pear                                          | pear                           | #D1E231              |
| Pearl                                         | pearl                          | #EAE0C8              |
| Pearl Aqua                                    | pearlAqua                      | #88D8C0              |
| Pearly purple                                 | pearlyPurple                   | #B768A2              |
| Peridot                                       | peridot                        | #E6E200              |
| Periwinkle                                    | periwinkle                     | #CCCCFF              |
| Permanent Geranium Lake                       | permanentGeraniumLake          | #E12C2C              |
| Persian blue                                  | persianBlue                    | #1C39BB              |
| Persian green                                 | persianGreen                   | #00A693              |
| Persian indigo                                | persianIndigo                  | #32127A              |
| Persian orange                                | persianOrange                  | #D99058              |
| Persian pink                                  | persianPink                    | #F77FBE              |
| Persian plum                                  | persianPlum                    | #701C1C              |
| Persian red                                   | persianRed                     | #CC3333              |
| Persian rose                                  | persianRose                    | #FE28A2              |
| Persimmon                                     | persimmon                      | #EC5800              |
| Peru                                          | peru                           | #CD853F              |
| Pewter Blue                                   | pewterBlue                     | #8BA8B7              |
| Phlox                                         | phlox                          | #DF00FF              |
| Phthalo blue                                  | phthaloBlue                    | #000F89              |
| Phthalo green                                 | phthaloGreen                   | #123524              |
| Picton blue                                   | pictonBlue                     | #45B1E8              |
| Pictorial carmine                             | pictorialCarmine               | #C30B4E              |
| Piggy pink                                    | piggyPink                      | #FDDDE6              |
| Pine green                                    | pineGreen                      | #01796F              |
| Pineapple                                     | pineapple                      | #563C5C              |
| Pink                                          | pink                           | #FFC0CB              |
| Pink (Pantone)                                | pinkPantone                    | #D74894              |
| Pink Flamingo                                 | pinkFlamingo                   | #FC74FD              |
| Pink Sherbet                                  | pinkSherbet                    | #F78FA7              |
| Pink lace                                     | pinkLace                       | #FFDDF4              |
| Pink lavender                                 | pinkLavender                   | #D8B2D1              |
| Pink pearl                                    | pinkPearl                      | #E7ACCF              |
| Pink raspberry                                | pinkRaspberry                  | #980036              |
| Pink-orange                                   | pinkOrange                     | #FF9966              |
| Pistachio                                     | pistachio                      | #93C572              |
| Pixie Powder                                  | pixiePowder                    | #391285              |
| Platinum                                      | platinum                       | #E5E4E2              |
| Plum                                          | plum                           | #8E4585              |
| Plum (web)                                    | plumWeb                        | #DDA0DD              |
| Plump Purple                                  | plumpPurple                    | #5946B2              |
| Polished Pine                                 | polishedPine                   | #5DA493              |
| Pomp and Power                                | pompAndPower                   | #86608E              |
| Popstar                                       | popstar                        | #BE4F62              |
| Portland Orange                               | portlandOrange                 | #FF5A36              |
| Powder blue                                   | powderBlue                     | #B0E0E6              |
| Princess Perfume                              | princessPerfume                | #FF85CF              |
| Princeton orange                              | princetonOrange                | #F58025              |
| Prune                                         | prune                          | #701C1C              |
| Prussian blue                                 | prussianBlue                   | #003153              |
| Psychedelic purple                            | psychedelicPurple              | #DF00FF              |
| Puce                                          | puce                           | #CC8899              |
| Puce red                                      | puceRed                        | #722F37              |
| Pullman Brown (UPS Brown)                     | pullmanBrownUpsBrown           | #644117              |
| Pullman Green                                 | pullmanGreen                   | #3B331C              |
| Pumpkin                                       | pumpkin                        | #FF7518              |
| Purple (HTML)                                 | purpleHtml                     | #800080              |
| Purple (Munsell)                              | purpleMunsell                  | #9F00C5              |
| Purple (X11)                                  | purpleX11                      | #A020F0              |
| Purple Heart                                  | purpleHeart                    | #69359C              |
| Purple Plum                                   | purplePlum                     | #9C51B6              |
| Purple mountain majesty                       | purpleMountainMajesty          | #9678B6              |
| Purple navy                                   | purpleNavy                     | #4E5180              |
| Purple pizzazz                                | purplePizzazz                  | #FE4EDA              |
| Purple taupe                                  | purpleTaupe                    | #50404D              |
| Purpureus                                     | purpureus                      | #9A4EAE              |
| Quartz                                        | quartz                         | #51484F              |
| Queen blue                                    | queenBlue                      | #436B95              |
| Queen pink                                    | queenPink                      | #E8CCD7              |
| Quick Silver                                  | quickSilver                    | #A6A6A6              |
| Quinacridone magenta                          | quinacridoneMagenta            | #8E3A59              |
| Rackley                                       | rackley                        | #5D8AA8              |
| Radical Red                                   | radicalRed                     | #FF355E              |
| Raisin black                                  | raisinBlack                    | #242124              |
| Rajah                                         | rajah                          | #FBAB60              |
| Raspberry                                     | raspberry                      | #E30B5D              |
| Raspberry glace                               | raspberryGlace                 | #915F6D              |
| Raspberry pink                                | raspberryPink                  | #E25098              |
| Raspberry rose                                | raspberryRose                  | #B3446C              |
| Raw Sienna                                    | rawSienna                      | #D68A59              |
| Raw umber                                     | rawUmber                       | #826644              |
| Razzle dazzle rose                            | razzleDazzleRose               | #FF33CC              |
| Razzmatazz                                    | razzmatazz                     | #E3256B              |
| Razzmic Berry                                 | razzmicBerry                   | #8D4E85              |
| Rebecca Purple                                | rebeccaPurple                  | #663399              |
| Red                                           | red                            | #FF0000              |
| Red (Crayola)                                 | redCrayola                     | #EE204D              |
| Red (Munsell)                                 | redMunsell                     | #F2003C              |
| Red (NCS)                                     | redNcs                         | #C40233              |
| Red (Pantone)                                 | redPantone                     | #ED2939              |
| Red (RYB)                                     | redRyb                         | #FE2712              |
| Red (pigment)                                 | redPigment                     | #ED1C24              |
| Red Salsa                                     | redSalsa                       | #FD3A4A              |
| Red devil                                     | redDevil                       | #860111              |
| Red-brown                                     | redBrown                       | #A52A2A              |
| Red-orange                                    | redOrange                      | #FF5349              |
| Red-purple                                    | redPurple                      | #E40078              |
| Red-violet                                    | redViolet                      | #C71585              |
| Redwood                                       | redwood                        | #A45A52              |
| Regalia                                       | regalia                        | #522D80              |
| Registration black                            | registrationBlack              | #000000              |
| Resolution blue                               | resolutionBlue                 | #002387              |
| Rhythm                                        | rhythm                         | #777696              |
| Rich black                                    | richBlack                      | #004040              |
| Rich black (FOGRA29)                          | richBlackFogra29               | #010B13              |
| Rich black (FOGRA39)                          | richBlackFogra39               | #010203              |
| Rich brilliant lavender                       | richBrilliantLavender          | #F1A7FE              |
| Rich carmine                                  | richCarmine                    | #D70040              |
| Rich electric blue                            | richElectricBlue               | #0892D0              |
| Rich lavender                                 | richLavender                   | #A76BCF              |
| Rich lilac                                    | richLilac                      | #B666D2              |
| Rich maroon                                   | richMaroon                     | #B03060              |
| Rifle green                                   | rifleGreen                     | #444C38              |
| Roast coffee                                  | roastCoffee                    | #704241              |
| Robin egg blue                                | robinEggBlue                   | #00CCCC              |
| Rocket metallic                               | rocketMetallic                 | #8A7F80              |
| Roman silver                                  | romanSilver                    | #838996              |
| Rose                                          | rose                           | #FF007F              |
| Rose Dust                                     | roseDust                       | #9E5E6F              |
| Rose bonbon                                   | roseBonbon                     | #F9429E              |
| Rose ebony                                    | roseEbony                      | #674846              |
| Rose gold                                     | roseGold                       | #B76E79              |
| Rose madder                                   | roseMadder                     | #E32636              |
| Rose pink                                     | rosePink                       | #FF66CC              |
| Rose quartz                                   | roseQuartz                     | #AA98A9              |
| Rose red                                      | roseRed                        | #C21E56              |
| Rose taupe                                    | roseTaupe                      | #905D5D              |
| Rose vale                                     | roseVale                       | #AB4E52              |
| Rosewood                                      | rosewood                       | #65000B              |
| Rosso corsa                                   | rossoCorsa                     | #D40000              |
| Rosy brown                                    | rosyBrown                      | #BC8F8F              |
| Royal azure                                   | royalAzure                     | #0038A8              |
| Royal blue                                    | royalBlue                      | #4169E1              |
| Royal fuchsia                                 | royalFuchsia                   | #CA2C92              |
| Royal purple                                  | royalPurple                    | #7851A9              |
| Royal yellow                                  | royalYellow                    | #FADA5E              |
| Ruber                                         | ruber                          | #CE4676              |
| Rubine red                                    | rubineRed                      | #D10056              |
| Ruby                                          | ruby                           | #E0115F              |
| Ruby red                                      | rubyRed                        | #9B111E              |
| Ruddy                                         | ruddy                          | #FF0028              |
| Ruddy brown                                   | ruddyBrown                     | #BB6528              |
| Ruddy pink                                    | ruddyPink                      | #E18E96              |
| Rufous                                        | rufous                         | #A81C07              |
| Russet                                        | russet                         | #80461B              |
| Russian green                                 | russianGreen                   | #679267              |
| Russian violet                                | russianViolet                  | #32174D              |
| Rust                                          | rust                           | #B7410E              |
| Rusty red                                     | rustyRed                       | #DA2C43              |
| Sacramento State green                        | sacramentoStateGreen           | #00563F              |
| Saddle brown                                  | saddleBrown                    | #8B4513              |
| Safety orange                                 | safetyOrange                   | #FF7800              |
| Safety orange (blaze orange)                  | safetyOrangeBlazeOrange        | #FF6700              |
| Safety yellow                                 | safetyYellow                   | #EED202              |
| Saffron                                       | saffron                        | #F4C430              |
| Sage                                          | sage                           | #BCB88A              |
| Salmon                                        | salmon                         | #FA8072              |
| Salmon pink                                   | salmonPink                     | #FF91A4              |
| Sand                                          | sand                           | #C2B280              |
| Sand dune                                     | sandDune                       | #967117              |
| Sandstorm                                     | sandstorm                      | #ECD540              |
| Sandy Tan                                     | sandyTan                       | #FDD9B5              |
| Sandy brown                                   | sandyBrown                     | #F4A460              |
| Sandy taupe                                   | sandyTaupe                     | #967117              |
| Sangria                                       | sangria                        | #92000A              |
| Sap green                                     | sapGreen                       | #507D2A              |
| Sapphire                                      | sapphire                       | #0F52BA              |
| Sapphire blue                                 | sapphireBlue                   | #0067A5              |
| Sasquatch Socks                               | sasquatchSocks                 | #FF4681              |
| Satin sheen gold                              | satinSheenGold                 | #CBA135              |
| Scarlet                                       | scarlet                        | #FD0E35              |
| Schauss pink                                  | schaussPink                    | #FF91AF              |
| School bus yellow                             | schoolBusYellow                | #FFD800              |
| Screamin' Green                               | screaminGreen                  | #66FF66              |
| Sea Foam Green                                | seaFoamGreen                   | #9FE2BF              |
| Sea Serpent                                   | seaSerpent                     | #4BC7CF              |
| Sea blue                                      | seaBlue                        | #006994              |
| Sea green                                     | seaGreen                       | #2E8B57              |
| Seal brown                                    | sealBrown                      | #59260B              |
| Seashell                                      | seashell                       | #FFF5EE              |
| Selective yellow                              | selectiveYellow                | #FFBA00              |
| Sepia                                         | sepia                          | #704214              |
| Shadow                                        | shadow                         | #8A795D              |
| Shadow blue                                   | shadowBlue                     | #778BA5              |
| Shampoo                                       | shampoo                        | #FFCFF1              |
| Shamrock green                                | shamrockGreen                  | #009E60              |
| Sheen Green                                   | sheenGreen                     | #8FD400              |
| Shimmering Blush                              | shimmeringBlush                | #D98695              |
| Shiny Shamrock                                | shinyShamrock                  | #5FA778              |
| Shocking pink                                 | shockingPink                   | #FC0FC0              |
| Shocking pink (Crayola)                       | shockingPinkCrayola            | #FF6FFF              |
| Sienna                                        | sienna                         | #882D17              |
| Silver                                        | silver                         | #C0C0C0              |
| Silver Lake blue                              | silverLakeBlue                 | #5D89BA              |
| Silver chalice                                | silverChalice                  | #ACACAC              |
| Silver pink                                   | silverPink                     | #C4AEAD              |
| Silver sand                                   | silverSand                     | #BFC1C2              |
| Sinopia                                       | sinopia                        | #CB410B              |
| Sizzling Red                                  | sizzlingRed                    | #FF3855              |
| Sizzling Sunrise                              | sizzlingSunrise                | #FFDB00              |
| Skobeloff                                     | skobeloff                      | #007474              |
| Sky blue                                      | skyBlue                        | #87CEEB              |
| Sky magenta                                   | skyMagenta                     | #CF71AF              |
| Slate blue                                    | slateBlue                      | #6A5ACD              |
| Slate gray                                    | slateGray                      | #708090              |
| Slimy Green                                   | slimyGreen                     | #299617              |
| Smalt (Dark powder blue)                      | smaltDarkPowderBlue            | #003399              |
| Smashed Pumpkin                               | smashedPumpkin                 | #FF6D3A              |
| Smitten                                       | smitten                        | #C84186              |
| Smoke                                         | smoke                          | #738276              |
| Smokey Topaz                                  | smokeyTopaz                    | #832A0D              |
| Smoky Topaz                                   | smokyTopaz                     | #933D41              |
| Smoky black                                   | smokyBlack                     | #100C08              |
| Snow                                          | snow                           | #FFFAFA              |
| Soap                                          | soap                           | #CEC8EF              |
| Solid pink                                    | solidPink                      | #893843              |
| Sonic silver                                  | sonicSilver                    | #757575              |
| Space cadet                                   | spaceCadet                     | #1D2951              |
| Spanish bistre                                | spanishBistre                  | #807532              |
| Spanish blue                                  | spanishBlue                    | #0070B8              |
| Spanish carmine                               | spanishCarmine                 | #D10047              |
| Spanish crimson                               | spanishCrimson                 | #E51A4C              |
| Spanish gray                                  | spanishGray                    | #989898              |
| Spanish green                                 | spanishGreen                   | #009150              |
| Spanish orange                                | spanishOrange                  | #E86100              |
| Spanish pink                                  | spanishPink                    | #F7BFBE              |
| Spanish red                                   | spanishRed                     | #E60026              |
| Spanish sky blue                              | spanishSkyBlue                 | #00FFFF              |
| Spanish violet                                | spanishViolet                  | #4C2882              |
| Spanish viridian                              | spanishViridian                | #007F5C              |
| Spartan Crimson                               | spartanCrimson                 | #9E1316              |
| Spicy mix                                     | spicyMix                       | #8B5f4D              |
| Spiro Disco Ball                              | spiroDiscoBall                 | #0FC0FC              |
| Spring Frost                                  | springFrost                    | #87FF2A              |
| Spring bud                                    | springBud                      | #A7FC00              |
| Spring green                                  | springGreen                    | #00FF7F              |
| St. Patrick's blue                            | stPatricksBlue                 | #23297A              |
| Star command blue                             | starCommandBlue                | #007BB8              |
| Steel Teal                                    | steelTeal                      | #5F8A8B              |
| Steel blue                                    | steelBlue                      | #4682B4              |
| Steel pink                                    | steelPink                      | #CC33CC              |
| Stil de grain yellow                          | stilDeGrainYellow              | #FADA5E              |
| Stizza                                        | stizza                         | #990000              |
| Stormcloud                                    | stormcloud                     | #4F666A              |
| Straw                                         | straw                          | #E4D96F              |
| Strawberry                                    | strawberry                     | #FC5A8D              |
| Sugar Plum                                    | sugarPlum                      | #914E75              |
| Sunburnt Cyclops                              | sunburntCyclops                | #FF404C              |
| Sunglow                                       | sunglow                        | #FFCC33              |
| Sunny                                         | sunny                          | #F2F27A              |
| Sunray                                        | sunray                         | #E3AB57              |
| Sunset                                        | sunset                         | #FAD6A5              |
| Sunset orange                                 | sunsetOrange                   | #FD5E53              |
| Super pink                                    | superPink                      | #CF6BA9              |
| Sweet Brown                                   | sweetBrown                     | #A83731              |
| Tan                                           | tan                            | #D2B48C              |
| Tangelo                                       | tangelo                        | #F94D00              |
| Tangerine                                     | tangerine                      | #F28500              |
| Tangerine yellow                              | tangerineYellow                | #FFCC00              |
| Tango pink                                    | tangoPink                      | #E4717A              |
| Tart Orange                                   | tartOrange                     | #FB4D46              |
| Taupe                                         | taupe                          | #483C32              |
| Taupe gray                                    | taupeGray                      | #8B8589              |
| Tea green                                     | teaGreen                       | #D0F0C0              |
| Tea rose                                      | teaRose                        | #F4C2C2              |
| Teal                                          | teal                           | #008080              |
| Teal blue                                     | tealBlue                       | #367588              |
| Teal deer                                     | tealDeer                       | #99E6B3              |
| Teal green                                    | tealGreen                      | #00827F              |
| Telemagenta                                   | telemagenta                    | #CF3476              |
| Tenné                                        | tenné                         | #CD5700              |
| Terra cotta                                   | terraCotta                     | #E2725B              |
| Thistle                                       | thistle                        | #D8BFD8              |
| Thulian pink                                  | thulianPink                    | #DE6FA1              |
| Tickle Me Pink                                | tickleMePink                   | #FC89AC              |
| Tiffany Blue                                  | tiffanyBlue                    | #0ABAB5              |
| Tiger's eye                                   | tigersEye                      | #E08D3C              |
| Timberwolf                                    | timberwolf                     | #DBD7D2              |
| Titanium yellow                               | titaniumYellow                 | #EEE600              |
| Tomato                                        | tomato                         | #FF6347              |
| Toolbox                                       | toolbox                        | #746CC0              |
| Topaz                                         | topaz                          | #FFC87C              |
| Tractor red                                   | tractorRed                     | #FD0E35              |
| Trolley Grey                                  | trolleyGrey                    | #808080              |
| Tropical rain forest                          | tropicalRainForest             | #00755E              |
| Tropical violet                               | tropicalViolet                 | #CDA4DE              |
| True Blue                                     | trueBlue                       | #0073CF              |
| Tufts Blue                                    | tuftsBlue                      | #417DC1              |
| Tulip                                         | tulip                          | #FF878D              |
| Tumbleweed                                    | tumbleweed                     | #DEAA88              |
| Turkish rose                                  | turkishRose                    | #B57281              |
| Turquoise                                     | turquoise                      | #40E0D0              |
| Turquoise Surf                                | turquoiseSurf                  | #00C5CD              |
| Turquoise blue                                | turquoiseBlue                  | #00FFEF              |
| Turquoise green                               | turquoiseGreen                 | #A0D6B4              |
| Turtle green                                  | turtleGreen                    | #8A9A5B              |
| Tuscan                                        | tuscan                         | #FAD6A5              |
| Tuscan brown                                  | tuscanBrown                    | #6F4E37              |
| Tuscan red                                    | tuscanRed                      | #7C4848              |
| Tuscan tan                                    | tuscanTan                      | #A67B5B              |
| Tuscany                                       | tuscany                        | #C09999              |
| Twilight lavender                             | twilightLavender               | #8A496B              |
| Tyrian purple                                 | tyrianPurple                   | #66023C              |
| UA blue                                       | uaBlue                         | #0033AA              |
| UA red                                        | uaRed                          | #D9004C              |
| UCLA Blue                                     | uclaBlue                       | #536895              |
| UCLA Gold                                     | uclaGold                       | #FFB300              |
| UFO Green                                     | ufoGreen                       | #3CD070              |
| UP Forest green                               | upForestGreen                  | #014421              |
| UP Maroon                                     | upMaroon                       | #7B1113              |
| USAFA blue                                    | usafaBlue                      | #004F98              |
| USC Cardinal                                  | uscCardinal                    | #990000              |
| USC Gold                                      | uscGold                        | #FFCC00              |
| Ube                                           | ube                            | #8878C3              |
| Ultra pink                                    | ultraPink                      | #FF6FFF              |
| Ultra red                                     | ultraRed                       | #FC6C85              |
| Ultramarine                                   | ultramarine                    | #3F00FF              |
| Ultramarine blue                              | ultramarineBlue                | #4166F5              |
| Umber                                         | umber                          | #635147              |
| Unbleached silk                               | unbleachedSilk                 | #FFDDCA              |
| United Nations blue                           | unitedNationsBlue              | #5B92E5              |
| University of California Gold                 | universityOfCaliforniaGold     | #B78727              |
| University of Tennessee Orange                | universityOfTennesseeOrange    | #F77F00              |
| Unmellow yellow                               | unmellowYellow                 | #FFFF66              |
| Upsdell red                                   | upsdellRed                     | #AE2029              |
| Urobilin                                      | urobilin                       | #E1AD21              |
| Utah Crimson                                  | utahCrimson                    | #D3003F              |
| Van Dyke Brown                                | vanDykeBrown                   | #664228              |
| Vanilla                                       | vanilla                        | #F3E5AB              |
| Vanilla ice                                   | vanillaIce                     | #F38FA9              |
| Vegas gold                                    | vegasGold                      | #C5B358              |
| Venetian red                                  | venetianRed                    | #C80815              |
| Verdigris                                     | verdigris                      | #43B3AE              |
| Vermilion                                     | vermilion                      | #D9381E              |
| Veronica                                      | veronica                       | #A020F0              |
| Very light azure                              | veryLightAzure                 | #74BBFB              |
| Very light blue                               | veryLightBlue                  | #6666FF              |
| Very light malachite green                    | veryLightMalachiteGreen        | #64E986              |
| Very light tangelo                            | veryLightTangelo               | #FFB077              |
| Very pale orange                              | veryPaleOrange                 | #FFDFBF              |
| Very pale yellow                              | veryPaleYellow                 | #FFFFBF              |
| Violet                                        | violet                         | #8F00FF              |
| Violet (RYB)                                  | violetRyb                      | #8601AF              |
| Violet (color wheel)                          | violetColorWheel               | #7F00FF              |
| Violet (web)                                  | violetWeb                      | #EE82EE              |
| Violet-blue                                   | violetBlue                     | #324AB2              |
| Violet-red                                    | violetRed                      | #F75394              |
| Viridian                                      | viridian                       | #40826D              |
| Viridian green                                | viridianGreen                  | #009698              |
| Vista blue                                    | vistaBlue                      | #7C9ED9              |
| Vivid amber                                   | vividAmber                     | #CC9900              |
| Vivid auburn                                  | vividAuburn                    | #922724              |
| Vivid burgundy                                | vividBurgundy                  | #9F1D35              |
| Vivid cerise                                  | vividCerise                    | #DA1D81              |
| Vivid cerulean                                | vividCerulean                  | #00AAEE              |
| Vivid crimson                                 | vividCrimson                   | #CC0033              |
| Vivid gamboge                                 | vividGamboge                   | #FF9900              |
| Vivid lime green                              | vividLimeGreen                 | #A6D608              |
| Vivid malachite                               | vividMalachite                 | #00CC33              |
| Vivid mulberry                                | vividMulberry                  | #B80CE3              |
| Vivid orange                                  | vividOrange                    | #FF5F00              |
| Vivid orange peel                             | vividOrangePeel                | #FFA000              |
| Vivid orchid                                  | vividOrchid                    | #CC00FF              |
| Vivid raspberry                               | vividRaspberry                 | #FF006C              |
| Vivid red                                     | vividRed                       | #F70D1A              |
| Vivid red-tangelo                             | vividRedTangelo                | #DF6124              |
| Vivid sky blue                                | vividSkyBlue                   | #00CCFF              |
| Vivid tangelo                                 | vividTangelo                   | #F07427              |
| Vivid tangerine                               | vividTangerine                 | #FFA089              |
| Vivid vermilion                               | vividVermilion                 | #E56024              |
| Vivid violet                                  | vividViolet                    | #9F00FF              |
| Vivid yellow                                  | vividYellow                    | #FFE302              |
| Volt                                          | volt                           | #CEFF00              |
| Wageningen Green                              | wageningenGreen                | #34B233              |
| Warm black                                    | warmBlack                      | #004242              |
| Waterspout                                    | waterspout                     | #A4F4F9              |
| Weldon Blue                                   | weldonBlue                     | #7C98AB              |
| Wenge                                         | wenge                          | #645452              |
| Wheat                                         | wheat                          | #F5DEB3              |
| White                                         | white                          | #FFFFFF              |
| White smoke                                   | whiteSmoke                     | #F5F5F5              |
| Wild Strawberry                               | wildStrawberry                 | #FF43A4              |
| Wild blue yonder                              | wildBlueYonder                 | #A2ADD0              |
| Wild orchid                                   | wildOrchid                     | #D470A2              |
| Wild watermelon                               | wildWatermelon                 | #FC6C85              |
| Willpower orange                              | willpowerOrange                | #FD5800              |
| Windsor tan                                   | windsorTan                     | #A75502              |
| Wine                                          | wine                           | #722F37              |
| Wine dregs                                    | wineDregs                      | #673147              |
| Winter Sky                                    | winterSky                      | #FF007C              |
| Winter Wizard                                 | winterWizard                   | #A0E6FF              |
| Wintergreen Dream                             | wintergreenDream               | #56887D              |
| Wisteria                                      | wisteria                       | #C9A0DC              |
| Wood brown                                    | woodBrown                      | #C19A6B              |
| Xanadu                                        | xanadu                         | #738678              |
| Yale Blue                                     | yaleBlue                       | #0F4D92              |
| Yankees blue                                  | yankeesBlue                    | #1C2841              |
| Yellow                                        | yellow                         | #FFFF00              |
| Yellow (Crayola)                              | yellowCrayola                  | #FCE883              |
| Yellow (Munsell)                              | yellowMunsell                  | #EFCC00              |
| Yellow (NCS)                                  | yellowNcs                      | #FFD300              |
| Yellow (Pantone)                              | yellowPantone                  | #FEDF00              |
| Yellow (RYB)                                  | yellowRyb                      | #FEFE33              |
| Yellow (process)                              | yellowProcess                  | #FFEF00              |
| Yellow Orange                                 | yellowOrange                   | #FFAE42              |
| Yellow Sunshine                               | yellowSunshine                 | #FFF700              |
| Yellow rose                                   | yellowRose                     | #FFF000              |
| Yellow-green                                  | yellowGreen                    | #9ACD32              |
| Zaffre                                        | zaffre                         | #0014A8              |
| Zinnwaldite brown                             | zinnwalditeBrown               | #2C1608              |
| Zomp                                          | zomp                           | #39A78E              |
