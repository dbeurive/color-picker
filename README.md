# Introduction

This package implements a simple colour picker that allows the user to pick a colour by its name among a given list of colours.

The list of colours comes from [Wikipedia](https://en.wikipedia.org/wiki/List_of_colors:_A%E2%80%93F).

# License

>  The MIT License (MIT)
>
>  Copyright (c) 2016 Denis BEURIVE
>
>  Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
>
>  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
>
>  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

# Synopsis

```php
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

# Installation

Form the command line:

    composer require dbeurive/color

Or, from within your file composer.json:

    "require": {
        "dbeurive/color": "*"
    }


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

| Name of the color                             | Method                         | HTML color code      | Sample |
| --------------------------------------------- | ------------------------------ | -------------------- | ------ |
| Absolute zero                                 | absoluteZero($inOptFormat)     | #0048BA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/absoluteZero.gif) |
| Acid green                                    | acidGreen($inOptFormat)        | #B0BF1A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/acidGreen.gif) |
| Aero                                          | aero($inOptFormat)             | #7CB9E8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aero.gif) |
| Aero blue                                     | aeroBlue($inOptFormat)         | #C9FFE5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aeroBlue.gif) |
| African violet                                | africanViolet($inOptFormat)    | #B284BE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/africanViolet.gif) |
| Air Force blue (RAF)                          | airForceBlueRaf($inOptFormat)  | #5D8AA8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/airForceBlueRaf.gif) |
| Air Force blue (USAF)                         | airForceBlueUsaf($inOptFormat) | #00308F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/airForceBlueUsaf.gif) |
| Air superiority blue                          | airSuperiorityBlue($inOptFormat) | #72A0C1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/airSuperiorityBlue.gif) |
| Alabama crimson                               | alabamaCrimson($inOptFormat)   | #AF002A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/alabamaCrimson.gif) |
| Alabaster                                     | alabaster($inOptFormat)        | #F2F0E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/alabaster.gif) |
| Alice blue                                    | aliceBlue($inOptFormat)        | #F0F8FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aliceBlue.gif) |
| Alien Armpit                                  | alienArmpit($inOptFormat)      | #84DE02              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/alienArmpit.gif) |
| Alizarin crimson                              | alizarinCrimson($inOptFormat)  | #E32636              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/alizarinCrimson.gif) |
| Alloy orange                                  | alloyOrange($inOptFormat)      | #C46210              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/alloyOrange.gif) |
| Almond                                        | almond($inOptFormat)           | #EFDECD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/almond.gif) |
| Amaranth                                      | amaranth($inOptFormat)         | #E52B50              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amaranth.gif) |
| Amaranth deep purple                          | amaranthDeepPurple($inOptFormat) | #9F2B68              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amaranthDeepPurple.gif) |
| Amaranth pink                                 | amaranthPink($inOptFormat)     | #F19CBB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amaranthPink.gif) |
| Amaranth purple                               | amaranthPurple($inOptFormat)   | #AB274F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amaranthPurple.gif) |
| Amaranth red                                  | amaranthRed($inOptFormat)      | #D3212D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amaranthRed.gif) |
| Amazon                                        | amazon($inOptFormat)           | #3B7A57              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amazon.gif) |
| Amazonite                                     | amazonite($inOptFormat)        | #00C4B0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amazonite.gif) |
| Amber                                         | amber($inOptFormat)            | #FFBF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amber.gif) |
| Amber (SAE/ECE)                               | amberSaeEce($inOptFormat)      | #FF7E00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amberSaeEce.gif) |
| American rose                                 | americanRose($inOptFormat)     | #FF033E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/americanRose.gif) |
| Amethyst                                      | amethyst($inOptFormat)         | #9966CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/amethyst.gif) |
| Android green                                 | androidGreen($inOptFormat)     | #A4C639              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/androidGreen.gif) |
| Anti-flash white                              | antiFlashWhite($inOptFormat)   | #F2F3F4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiFlashWhite.gif) |
| Antique brass                                 | antiqueBrass($inOptFormat)     | #CD9575              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiqueBrass.gif) |
| Antique bronze                                | antiqueBronze($inOptFormat)    | #665D1E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiqueBronze.gif) |
| Antique fuchsia                               | antiqueFuchsia($inOptFormat)   | #915C83              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiqueFuchsia.gif) |
| Antique ruby                                  | antiqueRuby($inOptFormat)      | #841B2D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiqueRuby.gif) |
| Antique white                                 | antiqueWhite($inOptFormat)     | #FAEBD7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/antiqueWhite.gif) |
| Ao (English)                                  | aoEnglish($inOptFormat)        | #008000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aoEnglish.gif) |
| Apple green                                   | appleGreen($inOptFormat)       | #8DB600              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/appleGreen.gif) |
| Apricot                                       | apricot($inOptFormat)          | #FBCEB1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/apricot.gif) |
| Aqua                                          | aqua($inOptFormat)             | #00FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aqua.gif) |
| Aquamarine                                    | aquamarine($inOptFormat)       | #7FFFD4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aquamarine.gif) |
| Arctic lime                                   | arcticLime($inOptFormat)       | #D0FF14              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/arcticLime.gif) |
| Army green                                    | armyGreen($inOptFormat)        | #4B5320              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/armyGreen.gif) |
| Arsenic                                       | arsenic($inOptFormat)          | #3B444B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/arsenic.gif) |
| Artichoke                                     | artichoke($inOptFormat)        | #8F9779              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/artichoke.gif) |
| Arylide yellow                                | arylideYellow($inOptFormat)    | #E9D66B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/arylideYellow.gif) |
| Ash grey                                      | ashGrey($inOptFormat)          | #B2BEB5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ashGrey.gif) |
| Asparagus                                     | asparagus($inOptFormat)        | #87A96B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/asparagus.gif) |
| Atomic tangerine                              | atomicTangerine($inOptFormat)  | #FF9966              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/atomicTangerine.gif) |
| Auburn                                        | auburn($inOptFormat)           | #A52A2A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/auburn.gif) |
| Aureolin                                      | aureolin($inOptFormat)         | #FDEE00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aureolin.gif) |
| AuroMetalSaurus                               | auroMetalSaurus($inOptFormat)  | #6E7F80              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/auroMetalSaurus.gif) |
| Avocado                                       | avocado($inOptFormat)          | #568203              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/avocado.gif) |
| Awesome                                       | awesome($inOptFormat)          | #FF2052              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/awesome.gif) |
| Aztec Gold                                    | aztecGold($inOptFormat)        | #C39953              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/aztecGold.gif) |
| Azure                                         | azure($inOptFormat)            | #007FFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/azure.gif) |
| Azure (web color)                             | azureWebColor($inOptFormat)    | #F0FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/azureWebColor.gif) |
| Azure mist                                    | azureMist($inOptFormat)        | #F0FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/azureMist.gif) |
| Azureish white                                | azureishWhite($inOptFormat)    | #DBE9F4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/azureishWhite.gif) |
| B'dazzled blue                                | bdazzledBlue($inOptFormat)     | #2E5894              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bdazzledBlue.gif) |
| Baby blue                                     | babyBlue($inOptFormat)         | #89CFF0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/babyBlue.gif) |
| Baby blue eyes                                | babyBlueEyes($inOptFormat)     | #A1CAF1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/babyBlueEyes.gif) |
| Baby pink                                     | babyPink($inOptFormat)         | #F4C2C2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/babyPink.gif) |
| Baby powder                                   | babyPowder($inOptFormat)       | #FEFEFA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/babyPowder.gif) |
| Baker-Miller pink                             | bakerMillerPink($inOptFormat)  | #FF91AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bakerMillerPink.gif) |
| Ball blue                                     | ballBlue($inOptFormat)         | #21ABCD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ballBlue.gif) |
| Banana Mania                                  | bananaMania($inOptFormat)      | #FAE7B5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bananaMania.gif) |
| Banana yellow                                 | bananaYellow($inOptFormat)     | #FFE135              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bananaYellow.gif) |
| Bangladesh green                              | bangladeshGreen($inOptFormat)  | #006A4E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bangladeshGreen.gif) |
| Barbie pink                                   | barbiePink($inOptFormat)       | #E0218A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/barbiePink.gif) |
| Barn red                                      | barnRed($inOptFormat)          | #7C0A02              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/barnRed.gif) |
| Battery Charged Blue                          | batteryChargedBlue($inOptFormat) | #1DACD6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/batteryChargedBlue.gif) |
| Battleship grey                               | battleshipGrey($inOptFormat)   | #848482              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/battleshipGrey.gif) |
| Bazaar                                        | bazaar($inOptFormat)           | #98777B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bazaar.gif) |
| Beau blue                                     | beauBlue($inOptFormat)         | #BCD4E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/beauBlue.gif) |
| Beaver                                        | beaver($inOptFormat)           | #9F8170              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/beaver.gif) |
| Begonia                                       | begonia($inOptFormat)          | #FA6E79              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/begonia.gif) |
| Beige                                         | beige($inOptFormat)            | #F5F5DC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/beige.gif) |
| Big Foot Feet                                 | bigFootFeet($inOptFormat)      | #E88E5A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bigFootFeet.gif) |
| Big dip o’ruby                              | bigDipORuby($inOptFormat)      | #9C2542              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bigDipORuby.gif) |
| Bisque                                        | bisque($inOptFormat)           | #FFE4C4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bisque.gif) |
| Bistre                                        | bistre($inOptFormat)           | #3D2B1F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bistre.gif) |
| Bistre brown                                  | bistreBrown($inOptFormat)      | #967117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bistreBrown.gif) |
| Bitter lemon                                  | bitterLemon($inOptFormat)      | #CAE00D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bitterLemon.gif) |
| Bitter lime                                   | bitterLime($inOptFormat)       | #BFFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bitterLime.gif) |
| Bittersweet                                   | bittersweet($inOptFormat)      | #FE6F5E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bittersweet.gif) |
| Bittersweet shimmer                           | bittersweetShimmer($inOptFormat) | #BF4F51              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bittersweetShimmer.gif) |
| Black                                         | black($inOptFormat)            | #000000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/black.gif) |
| Black Coral                                   | blackCoral($inOptFormat)       | #54626F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blackCoral.gif) |
| Black Shadows                                 | blackShadows($inOptFormat)     | #BFAFB2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blackShadows.gif) |
| Black bean                                    | blackBean($inOptFormat)        | #3D0C02              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blackBean.gif) |
| Black leather jacket                          | blackLeatherJacket($inOptFormat) | #253529              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blackLeatherJacket.gif) |
| Black olive                                   | blackOlive($inOptFormat)       | #3B3C36              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blackOlive.gif) |
| Blanched almond                               | blanchedAlmond($inOptFormat)   | #FFEBCD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blanchedAlmond.gif) |
| Blast-off bronze                              | blastOffBronze($inOptFormat)   | #A57164              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blastOffBronze.gif) |
| Bleu de France                                | bleuDeFrance($inOptFormat)     | #318CE7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bleuDeFrance.gif) |
| Blizzard Blue                                 | blizzardBlue($inOptFormat)     | #ACE5EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blizzardBlue.gif) |
| Blond                                         | blond($inOptFormat)            | #FAF0BE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blond.gif) |
| Blue                                          | blue($inOptFormat)             | #0000FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blue.gif) |
| Blue (Crayola)                                | blueCrayola($inOptFormat)      | #1F75FE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueCrayola.gif) |
| Blue (Munsell)                                | blueMunsell($inOptFormat)      | #0093AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueMunsell.gif) |
| Blue (NCS)                                    | blueNcs($inOptFormat)          | #0087BD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueNcs.gif) |
| Blue (Pantone)                                | bluePantone($inOptFormat)      | #0018A8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bluePantone.gif) |
| Blue (RYB)                                    | blueRyb($inOptFormat)          | #0247FE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueRyb.gif) |
| Blue (pigment)                                | bluePigment($inOptFormat)      | #333399              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bluePigment.gif) |
| Blue Bell                                     | blueBell($inOptFormat)         | #A2A2D0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueBell.gif) |
| Blue Bolt                                     | blueBolt($inOptFormat)         | #00B9FB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueBolt.gif) |
| Blue Jeans                                    | blueJeans($inOptFormat)        | #5DADEC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueJeans.gif) |
| Blue Lagoon                                   | blueLagoon($inOptFormat)       | #ACE5EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueLagoon.gif) |
| Blue sapphire                                 | blueSapphire($inOptFormat)     | #126180              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueSapphire.gif) |
| Blue yonder                                   | blueYonder($inOptFormat)       | #5072A7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueYonder.gif) |
| Blue-gray                                     | blueGray($inOptFormat)         | #6699CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueGray.gif) |
| Blue-green                                    | blueGreen($inOptFormat)        | #0D98BA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueGreen.gif) |
| Blue-magenta violet                           | blueMagentaViolet($inOptFormat) | #553592              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueMagentaViolet.gif) |
| Blue-violet                                   | blueViolet($inOptFormat)       | #8A2BE2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueViolet.gif) |
| Blueberry                                     | blueberry($inOptFormat)        | #4F86F7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blueberry.gif) |
| Bluebonnet                                    | bluebonnet($inOptFormat)       | #1C1CF0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bluebonnet.gif) |
| Blush                                         | blush($inOptFormat)            | #DE5D83              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/blush.gif) |
| Bole                                          | bole($inOptFormat)             | #79443B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bole.gif) |
| Bondi blue                                    | bondiBlue($inOptFormat)        | #0095B6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bondiBlue.gif) |
| Bone                                          | bone($inOptFormat)             | #E3DAC9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bone.gif) |
| Booger Buster                                 | boogerBuster($inOptFormat)     | #DDE26A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/boogerBuster.gif) |
| Boston University Red                         | bostonUniversityRed($inOptFormat) | #CC0000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bostonUniversityRed.gif) |
| Bottle green                                  | bottleGreen($inOptFormat)      | #006A4E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bottleGreen.gif) |
| Boysenberry                                   | boysenberry($inOptFormat)      | #873260              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/boysenberry.gif) |
| Brandeis blue                                 | brandeisBlue($inOptFormat)     | #0070FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brandeisBlue.gif) |
| Brass                                         | brass($inOptFormat)            | #B5A642              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brass.gif) |
| Brick red                                     | brickRed($inOptFormat)         | #CB4154              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brickRed.gif) |
| Bright Yellow (Crayola)                       | brightYellowCrayola($inOptFormat) | #FFAA1D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightYellowCrayola.gif) |
| Bright cerulean                               | brightCerulean($inOptFormat)   | #1DACD6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightCerulean.gif) |
| Bright green                                  | brightGreen($inOptFormat)      | #66FF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightGreen.gif) |
| Bright lavender                               | brightLavender($inOptFormat)   | #BF94E4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightLavender.gif) |
| Bright lilac                                  | brightLilac($inOptFormat)      | #D891EF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightLilac.gif) |
| Bright maroon                                 | brightMaroon($inOptFormat)     | #C32148              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightMaroon.gif) |
| Bright navy blue                              | brightNavyBlue($inOptFormat)   | #1974D2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightNavyBlue.gif) |
| Bright pink                                   | brightPink($inOptFormat)       | #FF007F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightPink.gif) |
| Bright turquoise                              | brightTurquoise($inOptFormat)  | #08E8DE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightTurquoise.gif) |
| Bright ube                                    | brightUbe($inOptFormat)        | #D19FE8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brightUbe.gif) |
| Brilliant azure                               | brilliantAzure($inOptFormat)   | #3399FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brilliantAzure.gif) |
| Brilliant lavender                            | brilliantLavender($inOptFormat) | #F4BBFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brilliantLavender.gif) |
| Brilliant rose                                | brilliantRose($inOptFormat)    | #FF55A3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brilliantRose.gif) |
| Brink pink                                    | brinkPink($inOptFormat)        | #FB607F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brinkPink.gif) |
| British racing green                          | britishRacingGreen($inOptFormat) | #004225              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/britishRacingGreen.gif) |
| Bronze                                        | bronze($inOptFormat)           | #CD7F32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bronze.gif) |
| Bronze Yellow                                 | bronzeYellow($inOptFormat)     | #737000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bronzeYellow.gif) |
| Brown (traditional)                           | brownTraditional($inOptFormat) | #964B00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brownTraditional.gif) |
| Brown (web)                                   | brownWeb($inOptFormat)         | #A52A2A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brownWeb.gif) |
| Brown Sugar                                   | brownSugar($inOptFormat)       | #AF6E4D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brownSugar.gif) |
| Brown Yellow                                  | brownYellow($inOptFormat)      | #cc9966              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brownYellow.gif) |
| Brown-nose                                    | brownNose($inOptFormat)        | #6B4423              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brownNose.gif) |
| Brunswick green                               | brunswickGreen($inOptFormat)   | #1B4D3E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/brunswickGreen.gif) |
| Bubble gum                                    | bubbleGum($inOptFormat)        | #FFC1CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bubbleGum.gif) |
| Bubbles                                       | bubbles($inOptFormat)          | #E7FEFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bubbles.gif) |
| Bud green                                     | budGreen($inOptFormat)         | #7BB661              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/budGreen.gif) |
| Buff                                          | buff($inOptFormat)             | #F0DC82              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/buff.gif) |
| Bulgarian rose                                | bulgarianRose($inOptFormat)    | #480607              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/bulgarianRose.gif) |
| Burgundy                                      | burgundy($inOptFormat)         | #800020              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burgundy.gif) |
| Burlywood                                     | burlywood($inOptFormat)        | #DEB887              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burlywood.gif) |
| Burnished Brown                               | burnishedBrown($inOptFormat)   | #A17A74              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burnishedBrown.gif) |
| Burnt orange                                  | burntOrange($inOptFormat)      | #CC5500              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burntOrange.gif) |
| Burnt sienna                                  | burntSienna($inOptFormat)      | #E97451              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burntSienna.gif) |
| Burnt umber                                   | burntUmber($inOptFormat)       | #8A3324              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/burntUmber.gif) |
| Byzantine                                     | byzantine($inOptFormat)        | #BD33A4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/byzantine.gif) |
| Byzantium                                     | byzantium($inOptFormat)        | #702963              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/byzantium.gif) |
| CG Blue                                       | cgBlue($inOptFormat)           | #007AA5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cgBlue.gif) |
| CG Red                                        | cgRed($inOptFormat)            | #E03C31              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cgRed.gif) |
| Cadet                                         | cadet($inOptFormat)            | #536872              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadet.gif) |
| Cadet blue                                    | cadetBlue($inOptFormat)        | #5F9EA0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadetBlue.gif) |
| Cadet grey                                    | cadetGrey($inOptFormat)        | #91A3B0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadetGrey.gif) |
| Cadmium green                                 | cadmiumGreen($inOptFormat)     | #006B3C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadmiumGreen.gif) |
| Cadmium orange                                | cadmiumOrange($inOptFormat)    | #ED872D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadmiumOrange.gif) |
| Cadmium red                                   | cadmiumRed($inOptFormat)       | #E30022              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadmiumRed.gif) |
| Cadmium yellow                                | cadmiumYellow($inOptFormat)    | #FFF600              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cadmiumYellow.gif) |
| Café au lait                                 | caféAuLait($inOptFormat)      | #A67B5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/caféAuLait.gif) |
| Café noir                                    | caféNoir($inOptFormat)        | #4B3621              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/caféNoir.gif) |
| Cal Poly Pomona green                         | calPolyPomonaGreen($inOptFormat) | #1E4D2B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/calPolyPomonaGreen.gif) |
| Cambridge Blue                                | cambridgeBlue($inOptFormat)    | #A3C1AD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cambridgeBlue.gif) |
| Camel                                         | camel($inOptFormat)            | #C19A6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/camel.gif) |
| Cameo pink                                    | cameoPink($inOptFormat)        | #EFBBCC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cameoPink.gif) |
| Camouflage green                              | camouflageGreen($inOptFormat)  | #78866B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/camouflageGreen.gif) |
| Canary                                        | canary($inOptFormat)           | #FFFF99              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/canary.gif) |
| Canary yellow                                 | canaryYellow($inOptFormat)     | #FFEF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/canaryYellow.gif) |
| Candy apple red                               | candyAppleRed($inOptFormat)    | #FF0800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/candyAppleRed.gif) |
| Candy pink                                    | candyPink($inOptFormat)        | #E4717A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/candyPink.gif) |
| Capri                                         | capri($inOptFormat)            | #00BFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/capri.gif) |
| Caput mortuum                                 | caputMortuum($inOptFormat)     | #592720              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/caputMortuum.gif) |
| Cardinal                                      | cardinal($inOptFormat)         | #C41E3A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cardinal.gif) |
| Caribbean green                               | caribbeanGreen($inOptFormat)   | #00CC99              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/caribbeanGreen.gif) |
| Carmine                                       | carmine($inOptFormat)          | #960018              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carmine.gif) |
| Carmine (M&P)                                 | carmineMp($inOptFormat)        | #D70040              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carmineMp.gif) |
| Carmine pink                                  | carminePink($inOptFormat)      | #EB4C42              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carminePink.gif) |
| Carmine red                                   | carmineRed($inOptFormat)       | #FF0038              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carmineRed.gif) |
| Carnation pink                                | carnationPink($inOptFormat)    | #FFA6C9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carnationPink.gif) |
| Carnelian                                     | carnelian($inOptFormat)        | #B31B1B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carnelian.gif) |
| Carolina blue                                 | carolinaBlue($inOptFormat)     | #56A0D3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carolinaBlue.gif) |
| Carrot orange                                 | carrotOrange($inOptFormat)     | #ED9121              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/carrotOrange.gif) |
| Castleton green                               | castletonGreen($inOptFormat)   | #00563F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/castletonGreen.gif) |
| Catalina blue                                 | catalinaBlue($inOptFormat)     | #062A78              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/catalinaBlue.gif) |
| Catawba                                       | catawba($inOptFormat)          | #703642              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/catawba.gif) |
| Cedar Chest                                   | cedarChest($inOptFormat)       | #C95A49              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cedarChest.gif) |
| Ceil                                          | ceil($inOptFormat)             | #92A1CF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ceil.gif) |
| Celadon                                       | celadon($inOptFormat)          | #ACE1AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/celadon.gif) |
| Celadon blue                                  | celadonBlue($inOptFormat)      | #007BA7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/celadonBlue.gif) |
| Celadon green                                 | celadonGreen($inOptFormat)     | #2F847C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/celadonGreen.gif) |
| Celeste                                       | celeste($inOptFormat)          | #B2FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/celeste.gif) |
| Celestial blue                                | celestialBlue($inOptFormat)    | #4997D0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/celestialBlue.gif) |
| Cerise                                        | cerise($inOptFormat)           | #DE3163              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cerise.gif) |
| Cerise pink                                   | cerisePink($inOptFormat)       | #EC3B83              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cerisePink.gif) |
| Cerulean                                      | cerulean($inOptFormat)         | #007BA7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cerulean.gif) |
| Cerulean blue                                 | ceruleanBlue($inOptFormat)     | #2A52BE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ceruleanBlue.gif) |
| Cerulean frost                                | ceruleanFrost($inOptFormat)    | #6D9BC3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ceruleanFrost.gif) |
| Chamoisee                                     | chamoisee($inOptFormat)        | #A0785A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chamoisee.gif) |
| Champagne                                     | champagne($inOptFormat)        | #F7E7CE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/champagne.gif) |
| Champagne pink                                | champagnePink($inOptFormat)    | #F1DDCF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/champagnePink.gif) |
| Charcoal                                      | charcoal($inOptFormat)         | #36454F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/charcoal.gif) |
| Charleston green                              | charlestonGreen($inOptFormat)  | #232B2B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/charlestonGreen.gif) |
| Charm pink                                    | charmPink($inOptFormat)        | #E68FAC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/charmPink.gif) |
| Chartreuse (traditional)                      | chartreuseTraditional($inOptFormat) | #DFFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chartreuseTraditional.gif) |
| Chartreuse (web)                              | chartreuseWeb($inOptFormat)    | #7FFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chartreuseWeb.gif) |
| Cherry                                        | cherry($inOptFormat)           | #DE3163              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cherry.gif) |
| Cherry blossom pink                           | cherryBlossomPink($inOptFormat) | #FFB7C5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cherryBlossomPink.gif) |
| Chestnut                                      | chestnut($inOptFormat)         | #954535              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chestnut.gif) |
| China pink                                    | chinaPink($inOptFormat)        | #DE6FA1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chinaPink.gif) |
| China rose                                    | chinaRose($inOptFormat)        | #A8516E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chinaRose.gif) |
| Chinese red                                   | chineseRed($inOptFormat)       | #AA381E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chineseRed.gif) |
| Chinese violet                                | chineseViolet($inOptFormat)    | #856088              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chineseViolet.gif) |
| Chlorophyll green                             | chlorophyllGreen($inOptFormat) | #4AFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chlorophyllGreen.gif) |
| Chocolate (traditional)                       | chocolateTraditional($inOptFormat) | #7B3F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chocolateTraditional.gif) |
| Chocolate (web)                               | chocolateWeb($inOptFormat)     | #D2691E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chocolateWeb.gif) |
| Chrome yellow                                 | chromeYellow($inOptFormat)     | #FFA700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/chromeYellow.gif) |
| Cinereous                                     | cinereous($inOptFormat)        | #98817B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cinereous.gif) |
| Cinnabar                                      | cinnabar($inOptFormat)         | #E34234              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cinnabar.gif) |
| Cinnamon Satin                                | cinnamonSatin($inOptFormat)    | #CD607E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cinnamonSatin.gif) |
| Cinnamon[citation needed]                     | cinnamon($inOptFormat)         | #D2691E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cinnamon.gif) |
| Citrine                                       | citrine($inOptFormat)          | #E4D00A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/citrine.gif) |
| Citron                                        | citron($inOptFormat)           | #9FA91F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/citron.gif) |
| Claret                                        | claret($inOptFormat)           | #7F1734              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/claret.gif) |
| Classic rose                                  | classicRose($inOptFormat)      | #FBCCE7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/classicRose.gif) |
| Cobalt Blue                                   | cobaltBlue($inOptFormat)       | #0047AB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cobaltBlue.gif) |
| Cocoa brown                                   | cocoaBrown($inOptFormat)       | #D2691E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cocoaBrown.gif) |
| Coconut                                       | coconut($inOptFormat)          | #965A3E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coconut.gif) |
| Coffee                                        | coffee($inOptFormat)           | #6F4E37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coffee.gif) |
| Columbia Blue                                 | columbiaBlue($inOptFormat)     | #C4D8E2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/columbiaBlue.gif) |
| Congo pink                                    | congoPink($inOptFormat)        | #F88379              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/congoPink.gif) |
| Cool Black                                    | coolBlack($inOptFormat)        | #002E63              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coolBlack.gif) |
| Cool grey                                     | coolGrey($inOptFormat)         | #8C92AC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coolGrey.gif) |
| Copper                                        | copper($inOptFormat)           | #B87333              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/copper.gif) |
| Copper (Crayola)                              | copperCrayola($inOptFormat)    | #DA8A67              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/copperCrayola.gif) |
| Copper penny                                  | copperPenny($inOptFormat)      | #AD6F69              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/copperPenny.gif) |
| Copper red                                    | copperRed($inOptFormat)        | #CB6D51              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/copperRed.gif) |
| Copper rose                                   | copperRose($inOptFormat)       | #996666              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/copperRose.gif) |
| Coquelicot                                    | coquelicot($inOptFormat)       | #FF3800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coquelicot.gif) |
| Coral                                         | coral($inOptFormat)            | #FF7F50              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coral.gif) |
| Coral Reef                                    | coralReef($inOptFormat)        | #FD7C6E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coralReef.gif) |
| Coral pink                                    | coralPink($inOptFormat)        | #F88379              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coralPink.gif) |
| Coral red                                     | coralRed($inOptFormat)         | #FF4040              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coralRed.gif) |
| Cordovan                                      | cordovan($inOptFormat)         | #893F45              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cordovan.gif) |
| Corn                                          | corn($inOptFormat)             | #FBEC5D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/corn.gif) |
| Cornell Red                                   | cornellRed($inOptFormat)       | #B31B1B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cornellRed.gif) |
| Cornflower blue                               | cornflowerBlue($inOptFormat)   | #6495ED              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cornflowerBlue.gif) |
| Cornsilk                                      | cornsilk($inOptFormat)         | #FFF8DC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cornsilk.gif) |
| Cosmic Cobalt                                 | cosmicCobalt($inOptFormat)     | #2E2D88              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cosmicCobalt.gif) |
| Cosmic latte                                  | cosmicLatte($inOptFormat)      | #FFF8E7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cosmicLatte.gif) |
| Cotton candy                                  | cottonCandy($inOptFormat)      | #FFBCD9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cottonCandy.gif) |
| Coyote brown                                  | coyoteBrown($inOptFormat)      | #81613C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/coyoteBrown.gif) |
| Cream                                         | cream($inOptFormat)            | #FFFDD0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cream.gif) |
| Crimson                                       | crimson($inOptFormat)          | #DC143C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/crimson.gif) |
| Crimson glory                                 | crimsonGlory($inOptFormat)     | #BE0032              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/crimsonGlory.gif) |
| Crimson red                                   | crimsonRed($inOptFormat)       | #990000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/crimsonRed.gif) |
| Cultured                                      | cultured($inOptFormat)         | #F5F5F5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cultured.gif) |
| Cyan                                          | cyan($inOptFormat)             | #00FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyan.gif) |
| Cyan (process)                                | cyanProcess($inOptFormat)      | #00B7EB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyanProcess.gif) |
| Cyan azure                                    | cyanAzure($inOptFormat)        | #4E82B4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyanAzure.gif) |
| Cyan cobalt blue                              | cyanCobaltBlue($inOptFormat)   | #28589C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyanCobaltBlue.gif) |
| Cyan cornflower blue                          | cyanCornflowerBlue($inOptFormat) | #188BC2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyanCornflowerBlue.gif) |
| Cyan-blue azure                               | cyanBlueAzure($inOptFormat)    | #4682BF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyanBlueAzure.gif) |
| Cyber grape                                   | cyberGrape($inOptFormat)       | #58427C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyberGrape.gif) |
| Cyber yellow                                  | cyberYellow($inOptFormat)      | #FFD300              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyberYellow.gif) |
| Cyclamen                                      | cyclamen($inOptFormat)         | #F56FA1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/cyclamen.gif) |
| Daffodil                                      | daffodil($inOptFormat)         | #FFFF31              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/daffodil.gif) |
| Dandelion                                     | dandelion($inOptFormat)        | #F0E130              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dandelion.gif) |
| Dark blue                                     | darkBlue($inOptFormat)         | #00008B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkBlue.gif) |
| Dark blue-gray                                | darkBlueGray($inOptFormat)     | #666699              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkBlueGray.gif) |
| Dark brown                                    | darkBrown($inOptFormat)        | #654321              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkBrown.gif) |
| Dark brown-tangelo                            | darkBrownTangelo($inOptFormat) | #88654E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkBrownTangelo.gif) |
| Dark byzantium                                | darkByzantium($inOptFormat)    | #5D3954              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkByzantium.gif) |
| Dark candy apple red                          | darkCandyAppleRed($inOptFormat) | #A40000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkCandyAppleRed.gif) |
| Dark cerulean                                 | darkCerulean($inOptFormat)     | #08457E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkCerulean.gif) |
| Dark chestnut                                 | darkChestnut($inOptFormat)     | #986960              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkChestnut.gif) |
| Dark coral                                    | darkCoral($inOptFormat)        | #CD5B45              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkCoral.gif) |
| Dark cyan                                     | darkCyan($inOptFormat)         | #008B8B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkCyan.gif) |
| Dark electric blue                            | darkElectricBlue($inOptFormat) | #536878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkElectricBlue.gif) |
| Dark goldenrod                                | darkGoldenrod($inOptFormat)    | #B8860B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkGoldenrod.gif) |
| Dark gray (X11)                               | darkGrayX11($inOptFormat)      | #A9A9A9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkGrayX11.gif) |
| Dark green                                    | darkGreen($inOptFormat)        | #013220              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkGreen.gif) |
| Dark green (X11)                              | darkGreenX11($inOptFormat)     | #006400              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkGreenX11.gif) |
| Dark gunmetal                                 | darkGunmetal($inOptFormat)     | #1F262A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkGunmetal.gif) |
| Dark imperial blue                            | darkImperialBlue($inOptFormat) | #00147E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkImperialBlue.gif) |
| Dark jungle green                             | darkJungleGreen($inOptFormat)  | #1A2421              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkJungleGreen.gif) |
| Dark khaki                                    | darkKhaki($inOptFormat)        | #BDB76B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkKhaki.gif) |
| Dark lava                                     | darkLava($inOptFormat)         | #483C32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkLava.gif) |
| Dark lavender                                 | darkLavender($inOptFormat)     | #734F96              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkLavender.gif) |
| Dark liver                                    | darkLiver($inOptFormat)        | #534B4F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkLiver.gif) |
| Dark liver (horses)                           | darkLiverHorses($inOptFormat)  | #543D37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkLiverHorses.gif) |
| Dark magenta                                  | darkMagenta($inOptFormat)      | #8B008B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkMagenta.gif) |
| Dark medium gray                              | darkMediumGray($inOptFormat)   | #A9A9A9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkMediumGray.gif) |
| Dark midnight blue                            | darkMidnightBlue($inOptFormat) | #003366              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkMidnightBlue.gif) |
| Dark moss green                               | darkMossGreen($inOptFormat)    | #4A5D23              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkMossGreen.gif) |
| Dark olive green                              | darkOliveGreen($inOptFormat)   | #556B2F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkOliveGreen.gif) |
| Dark orange                                   | darkOrange($inOptFormat)       | #FF8C00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkOrange.gif) |
| Dark orchid                                   | darkOrchid($inOptFormat)       | #9932CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkOrchid.gif) |
| Dark pastel blue                              | darkPastelBlue($inOptFormat)   | #779ECB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPastelBlue.gif) |
| Dark pastel green                             | darkPastelGreen($inOptFormat)  | #03C03C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPastelGreen.gif) |
| Dark pastel purple                            | darkPastelPurple($inOptFormat) | #966FD6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPastelPurple.gif) |
| Dark pastel red                               | darkPastelRed($inOptFormat)    | #C23B22              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPastelRed.gif) |
| Dark pink                                     | darkPink($inOptFormat)         | #E75480              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPink.gif) |
| Dark powder blue                              | darkPowderBlue($inOptFormat)   | #003399              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPowderBlue.gif) |
| Dark puce                                     | darkPuce($inOptFormat)         | #4F3A3C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPuce.gif) |
| Dark purple                                   | darkPurple($inOptFormat)       | #301934              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkPurple.gif) |
| Dark raspberry                                | darkRaspberry($inOptFormat)    | #872657              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkRaspberry.gif) |
| Dark red                                      | darkRed($inOptFormat)          | #8B0000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkRed.gif) |
| Dark salmon                                   | darkSalmon($inOptFormat)       | #E9967A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSalmon.gif) |
| Dark scarlet                                  | darkScarlet($inOptFormat)      | #560319              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkScarlet.gif) |
| Dark sea green                                | darkSeaGreen($inOptFormat)     | #8FBC8F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSeaGreen.gif) |
| Dark sienna                                   | darkSienna($inOptFormat)       | #3C1414              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSienna.gif) |
| Dark sky blue                                 | darkSkyBlue($inOptFormat)      | #8CBED6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSkyBlue.gif) |
| Dark slate blue                               | darkSlateBlue($inOptFormat)    | #483D8B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSlateBlue.gif) |
| Dark slate gray                               | darkSlateGray($inOptFormat)    | #2F4F4F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSlateGray.gif) |
| Dark spring green                             | darkSpringGreen($inOptFormat)  | #177245              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkSpringGreen.gif) |
| Dark tan                                      | darkTan($inOptFormat)          | #918151              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkTan.gif) |
| Dark tangerine                                | darkTangerine($inOptFormat)    | #FFA812              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkTangerine.gif) |
| Dark taupe                                    | darkTaupe($inOptFormat)        | #483C32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkTaupe.gif) |
| Dark terra cotta                              | darkTerraCotta($inOptFormat)   | #CC4E5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkTerraCotta.gif) |
| Dark turquoise                                | darkTurquoise($inOptFormat)    | #00CED1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkTurquoise.gif) |
| Dark vanilla                                  | darkVanilla($inOptFormat)      | #D1BEA8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkVanilla.gif) |
| Dark violet                                   | darkViolet($inOptFormat)       | #9400D3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkViolet.gif) |
| Dark yellow                                   | darkYellow($inOptFormat)       | #9B870C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/darkYellow.gif) |
| Dartmouth green                               | dartmouthGreen($inOptFormat)   | #00703C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dartmouthGreen.gif) |
| Davy's grey                                   | davysGrey($inOptFormat)        | #555555              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/davysGrey.gif) |
| Debian red                                    | debianRed($inOptFormat)        | #D70A53              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/debianRed.gif) |
| Deep Green                                    | deepGreen($inOptFormat)        | #056608              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepGreen.gif) |
| Deep Red                                      | deepRed($inOptFormat)          | #850101              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepRed.gif) |
| Deep Space Sparkle                            | deepSpaceSparkle($inOptFormat) | #4A646C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepSpaceSparkle.gif) |
| Deep Taupe                                    | deepTaupe($inOptFormat)        | #7E5E60              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepTaupe.gif) |
| Deep Tuscan red                               | deepTuscanRed($inOptFormat)    | #66424D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepTuscanRed.gif) |
| Deep aquamarine                               | deepAquamarine($inOptFormat)   | #40826D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepAquamarine.gif) |
| Deep carmine                                  | deepCarmine($inOptFormat)      | #A9203E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepCarmine.gif) |
| Deep carmine pink                             | deepCarminePink($inOptFormat)  | #EF3038              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepCarminePink.gif) |
| Deep carrot orange                            | deepCarrotOrange($inOptFormat) | #E9692C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepCarrotOrange.gif) |
| Deep cerise                                   | deepCerise($inOptFormat)       | #DA3287              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepCerise.gif) |
| Deep champagne                                | deepChampagne($inOptFormat)    | #FAD6A5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepChampagne.gif) |
| Deep chestnut                                 | deepChestnut($inOptFormat)     | #B94E48              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepChestnut.gif) |
| Deep coffee                                   | deepCoffee($inOptFormat)       | #704241              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepCoffee.gif) |
| Deep fuchsia                                  | deepFuchsia($inOptFormat)      | #C154C1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepFuchsia.gif) |
| Deep green-cyan turquoise                     | deepGreenCyanTurquoise($inOptFormat) | #0E7C61              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepGreenCyanTurquoise.gif) |
| Deep jungle green                             | deepJungleGreen($inOptFormat)  | #004B49              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepJungleGreen.gif) |
| Deep koamaru                                  | deepKoamaru($inOptFormat)      | #333366              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepKoamaru.gif) |
| Deep lemon                                    | deepLemon($inOptFormat)        | #F5C71A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepLemon.gif) |
| Deep lilac                                    | deepLilac($inOptFormat)        | #9955BB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepLilac.gif) |
| Deep magenta                                  | deepMagenta($inOptFormat)      | #CC00CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepMagenta.gif) |
| Deep maroon                                   | deepMaroon($inOptFormat)       | #820000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepMaroon.gif) |
| Deep mauve                                    | deepMauve($inOptFormat)        | #D473D4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepMauve.gif) |
| Deep moss green                               | deepMossGreen($inOptFormat)    | #355E3B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepMossGreen.gif) |
| Deep peach                                    | deepPeach($inOptFormat)        | #FFCBA4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepPeach.gif) |
| Deep pink                                     | deepPink($inOptFormat)         | #FF1493              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepPink.gif) |
| Deep puce                                     | deepPuce($inOptFormat)         | #A95C68              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepPuce.gif) |
| Deep ruby                                     | deepRuby($inOptFormat)         | #843F5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepRuby.gif) |
| Deep saffron                                  | deepSaffron($inOptFormat)      | #FF9933              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepSaffron.gif) |
| Deep sky blue                                 | deepSkyBlue($inOptFormat)      | #00BFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepSkyBlue.gif) |
| Deep spring bud                               | deepSpringBud($inOptFormat)    | #556B2F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepSpringBud.gif) |
| Deep violet                                   | deepViolet($inOptFormat)       | #330066              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deepViolet.gif) |
| Deer                                          | deer($inOptFormat)             | #BA8759              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/deer.gif) |
| Denim                                         | denim($inOptFormat)            | #1560BD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/denim.gif) |
| Denim Blue                                    | denimBlue($inOptFormat)        | #2243B6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/denimBlue.gif) |
| Desaturated cyan                              | desaturatedCyan($inOptFormat)  | #669999              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/desaturatedCyan.gif) |
| Desert                                        | desert($inOptFormat)           | #C19A6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/desert.gif) |
| Desert sand                                   | desertSand($inOptFormat)       | #EDC9AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/desertSand.gif) |
| Desire                                        | desire($inOptFormat)           | #EA3C53              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/desire.gif) |
| Diamond                                       | diamond($inOptFormat)          | #B9F2FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/diamond.gif) |
| Dim gray                                      | dimGray($inOptFormat)          | #696969              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dimGray.gif) |
| Dingy Dungeon                                 | dingyDungeon($inOptFormat)     | #C53151              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dingyDungeon.gif) |
| Dirt                                          | dirt($inOptFormat)             | #9B7653              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dirt.gif) |
| Dodger blue                                   | dodgerBlue($inOptFormat)       | #1E90FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dodgerBlue.gif) |
| Dogwood rose                                  | dogwoodRose($inOptFormat)      | #D71868              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dogwoodRose.gif) |
| Dollar bill                                   | dollarBill($inOptFormat)       | #85BB65              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dollarBill.gif) |
| Dolphin Gray                                  | dolphinGray($inOptFormat)      | #828E84              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dolphinGray.gif) |
| Donkey brown                                  | donkeyBrown($inOptFormat)      | #664C28              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/donkeyBrown.gif) |
| Drab                                          | drab($inOptFormat)             | #967117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/drab.gif) |
| Duke blue                                     | dukeBlue($inOptFormat)         | #00009C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dukeBlue.gif) |
| Dust storm                                    | dustStorm($inOptFormat)        | #E5CCC9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dustStorm.gif) |
| Dutch white                                   | dutchWhite($inOptFormat)       | #EFDFBB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/dutchWhite.gif) |
| Earth yellow                                  | earthYellow($inOptFormat)      | #E1A95F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/earthYellow.gif) |
| Ebony                                         | ebony($inOptFormat)            | #555D50              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ebony.gif) |
| Ecru                                          | ecru($inOptFormat)             | #C2B280              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ecru.gif) |
| Eerie black                                   | eerieBlack($inOptFormat)       | #1B1B1B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/eerieBlack.gif) |
| Eggplant                                      | eggplant($inOptFormat)         | #614051              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/eggplant.gif) |
| Eggshell                                      | eggshell($inOptFormat)         | #F0EAD6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/eggshell.gif) |
| Egyptian blue                                 | egyptianBlue($inOptFormat)     | #1034A6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/egyptianBlue.gif) |
| Electric blue                                 | electricBlue($inOptFormat)     | #7DF9FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricBlue.gif) |
| Electric crimson                              | electricCrimson($inOptFormat)  | #FF003F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricCrimson.gif) |
| Electric cyan                                 | electricCyan($inOptFormat)     | #00FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricCyan.gif) |
| Electric green                                | electricGreen($inOptFormat)    | #00FF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricGreen.gif) |
| Electric indigo                               | electricIndigo($inOptFormat)   | #6F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricIndigo.gif) |
| Electric lavender                             | electricLavender($inOptFormat) | #F4BBFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricLavender.gif) |
| Electric lime                                 | electricLime($inOptFormat)     | #CCFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricLime.gif) |
| Electric purple                               | electricPurple($inOptFormat)   | #BF00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricPurple.gif) |
| Electric ultramarine                          | electricUltramarine($inOptFormat) | #3F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricUltramarine.gif) |
| Electric violet                               | electricViolet($inOptFormat)   | #8F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricViolet.gif) |
| Electric yellow                               | electricYellow($inOptFormat)   | #FFFF33              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/electricYellow.gif) |
| Emerald                                       | emerald($inOptFormat)          | #50C878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/emerald.gif) |
| Eminence                                      | eminence($inOptFormat)         | #6C3082              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/eminence.gif) |
| English green                                 | englishGreen($inOptFormat)     | #1B4D3E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/englishGreen.gif) |
| English lavender                              | englishLavender($inOptFormat)  | #B48395              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/englishLavender.gif) |
| English red                                   | englishRed($inOptFormat)       | #AB4B52              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/englishRed.gif) |
| English vermillion                            | englishVermillion($inOptFormat) | #CC474B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/englishVermillion.gif) |
| English violet                                | englishViolet($inOptFormat)    | #563C5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/englishViolet.gif) |
| Eton blue                                     | etonBlue($inOptFormat)         | #96C8A2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/etonBlue.gif) |
| Eucalyptus                                    | eucalyptus($inOptFormat)       | #44D7A8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/eucalyptus.gif) |
| Fallow                                        | fallow($inOptFormat)           | #C19A6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fallow.gif) |
| Falu red                                      | faluRed($inOptFormat)          | #801818              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/faluRed.gif) |
| Fandango                                      | fandango($inOptFormat)         | #B53389              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fandango.gif) |
| Fandango pink                                 | fandangoPink($inOptFormat)     | #DE5285              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fandangoPink.gif) |
| Fashion fuchsia                               | fashionFuchsia($inOptFormat)   | #F400A1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fashionFuchsia.gif) |
| Fawn                                          | fawn($inOptFormat)             | #E5AA70              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fawn.gif) |
| Feldgrau                                      | feldgrau($inOptFormat)         | #4D5D53              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/feldgrau.gif) |
| Feldspar                                      | feldspar($inOptFormat)         | #FDD5B1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/feldspar.gif) |
| Fern green                                    | fernGreen($inOptFormat)        | #4F7942              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fernGreen.gif) |
| Ferrari Red                                   | ferrariRed($inOptFormat)       | #FF2800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ferrariRed.gif) |
| Field drab                                    | fieldDrab($inOptFormat)        | #6C541E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fieldDrab.gif) |
| Fiery Rose                                    | fieryRose($inOptFormat)        | #FF5470              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fieryRose.gif) |
| Fire engine red                               | fireEngineRed($inOptFormat)    | #CE2029              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fireEngineRed.gif) |
| Firebrick                                     | firebrick($inOptFormat)        | #B22222              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/firebrick.gif) |
| Flame                                         | flame($inOptFormat)            | #E25822              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flame.gif) |
| Flamingo pink                                 | flamingoPink($inOptFormat)     | #FC8EAC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flamingoPink.gif) |
| Flattery                                      | flattery($inOptFormat)         | #6B4423              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flattery.gif) |
| Flavescent                                    | flavescent($inOptFormat)       | #F7E98E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flavescent.gif) |
| Flax                                          | flax($inOptFormat)             | #EEDC82              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flax.gif) |
| Flirt                                         | flirt($inOptFormat)            | #A2006D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/flirt.gif) |
| Floral white                                  | floralWhite($inOptFormat)      | #FFFAF0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/floralWhite.gif) |
| Fluorescent orange                            | fluorescentOrange($inOptFormat) | #FFBF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fluorescentOrange.gif) |
| Fluorescent pink                              | fluorescentPink($inOptFormat)  | #FF1493              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fluorescentPink.gif) |
| Fluorescent yellow                            | fluorescentYellow($inOptFormat) | #CCFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fluorescentYellow.gif) |
| Folly                                         | folly($inOptFormat)            | #FF004F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/folly.gif) |
| Forest green (traditional)                    | forestGreenTraditional($inOptFormat) | #014421              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/forestGreenTraditional.gif) |
| Forest green (web)                            | forestGreenWeb($inOptFormat)   | #228B22              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/forestGreenWeb.gif) |
| French beige                                  | frenchBeige($inOptFormat)      | #A67B5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchBeige.gif) |
| French bistre                                 | frenchBistre($inOptFormat)     | #856D4D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchBistre.gif) |
| French blue                                   | frenchBlue($inOptFormat)       | #0072BB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchBlue.gif) |
| French fuchsia                                | frenchFuchsia($inOptFormat)    | #FD3F92              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchFuchsia.gif) |
| French lilac                                  | frenchLilac($inOptFormat)      | #86608E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchLilac.gif) |
| French lime                                   | frenchLime($inOptFormat)       | #9EFD38              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchLime.gif) |
| French mauve                                  | frenchMauve($inOptFormat)      | #D473D4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchMauve.gif) |
| French pink                                   | frenchPink($inOptFormat)       | #FD6C9E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchPink.gif) |
| French plum                                   | frenchPlum($inOptFormat)       | #811453              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchPlum.gif) |
| French puce                                   | frenchPuce($inOptFormat)       | #4E1609              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchPuce.gif) |
| French raspberry                              | frenchRaspberry($inOptFormat)  | #C72C48              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchRaspberry.gif) |
| French rose                                   | frenchRose($inOptFormat)       | #F64A8A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchRose.gif) |
| French sky blue                               | frenchSkyBlue($inOptFormat)    | #77B5FE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchSkyBlue.gif) |
| French violet                                 | frenchViolet($inOptFormat)     | #8806CE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchViolet.gif) |
| French wine                                   | frenchWine($inOptFormat)       | #AC1E44              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frenchWine.gif) |
| Fresh Air                                     | freshAir($inOptFormat)         | #A6E7FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/freshAir.gif) |
| Frostbite                                     | frostbite($inOptFormat)        | #E936A7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/frostbite.gif) |
| Fuchsia                                       | fuchsia($inOptFormat)          | #FF00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuchsia.gif) |
| Fuchsia (Crayola)                             | fuchsiaCrayola($inOptFormat)   | #C154C1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuchsiaCrayola.gif) |
| Fuchsia pink                                  | fuchsiaPink($inOptFormat)      | #FF77FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuchsiaPink.gif) |
| Fuchsia purple                                | fuchsiaPurple($inOptFormat)    | #CC397B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuchsiaPurple.gif) |
| Fuchsia rose                                  | fuchsiaRose($inOptFormat)      | #C74375              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuchsiaRose.gif) |
| Fulvous                                       | fulvous($inOptFormat)          | #E48400              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fulvous.gif) |
| Fuzzy Wuzzy                                   | fuzzyWuzzy($inOptFormat)       | #CC6666              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/fuzzyWuzzy.gif) |
| GO green                                      | goGreen($inOptFormat)          | #00AB66              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goGreen.gif) |
| Gainsboro                                     | gainsboro($inOptFormat)        | #DCDCDC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gainsboro.gif) |
| Gamboge                                       | gamboge($inOptFormat)          | #E49B0F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gamboge.gif) |
| Gamboge orange (brown)                        | gambogeOrangeBrown($inOptFormat) | #996600              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gambogeOrangeBrown.gif) |
| Gargoyle Gas                                  | gargoyleGas($inOptFormat)      | #FFDF46              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gargoyleGas.gif) |
| Generic viridian                              | genericViridian($inOptFormat)  | #007F66              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/genericViridian.gif) |
| Ghost white                                   | ghostWhite($inOptFormat)       | #F8F8FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ghostWhite.gif) |
| Giant's Club                                  | giantsClub($inOptFormat)       | #B05C52              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/giantsClub.gif) |
| Giants orange                                 | giantsOrange($inOptFormat)     | #FE5A1D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/giantsOrange.gif) |
| Ginger                                        | ginger($inOptFormat)           | #B06500              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ginger.gif) |
| Glaucous                                      | glaucous($inOptFormat)         | #6082B6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/glaucous.gif) |
| Glitter                                       | glitter($inOptFormat)          | #E6E8FA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/glitter.gif) |
| Glossy Grape                                  | glossyGrape($inOptFormat)      | #AB92B3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/glossyGrape.gif) |
| Gold (metallic)                               | goldMetallic($inOptFormat)     | #D4AF37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldMetallic.gif) |
| Gold (web) (Golden)                           | goldWebGolden($inOptFormat)    | #FFD700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldWebGolden.gif) |
| Gold Fusion                                   | goldFusion($inOptFormat)       | #85754E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldFusion.gif) |
| Golden brown                                  | goldenBrown($inOptFormat)      | #996515              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldenBrown.gif) |
| Golden poppy                                  | goldenPoppy($inOptFormat)      | #FCC200              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldenPoppy.gif) |
| Golden yellow                                 | goldenYellow($inOptFormat)     | #FFDF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldenYellow.gif) |
| Goldenrod                                     | goldenrod($inOptFormat)        | #DAA520              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/goldenrod.gif) |
| Granite Gray                                  | graniteGray($inOptFormat)      | #676767              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/graniteGray.gif) |
| Granny Smith Apple                            | grannySmithApple($inOptFormat) | #A8E4A0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grannySmithApple.gif) |
| Grape                                         | grape($inOptFormat)            | #6F2DA8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grape.gif) |
| Gray                                          | gray($inOptFormat)             | #808080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gray.gif) |
| Gray (HTML/CSS gray)                          | grayHtmlCssGray($inOptFormat)  | #808080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grayHtmlCssGray.gif) |
| Gray (X11 gray)                               | grayX11Gray($inOptFormat)      | #BEBEBE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grayX11Gray.gif) |
| Gray-asparagus                                | grayAsparagus($inOptFormat)    | #465945              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grayAsparagus.gif) |
| Gray-blue                                     | grayBlue($inOptFormat)         | #8C92AC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grayBlue.gif) |
| Green (Color Wheel) (X11 green)               | greenColorWheelX11Green($inOptFormat) | #00FF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenColorWheelX11Green.gif) |
| Green (Crayola)                               | greenCrayola($inOptFormat)     | #1CAC78              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenCrayola.gif) |
| Green (HTML/CSS color)                        | greenHtmlCssColor($inOptFormat) | #008000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenHtmlCssColor.gif) |
| Green (Munsell)                               | greenMunsell($inOptFormat)     | #00A877              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenMunsell.gif) |
| Green (NCS)                                   | greenNcs($inOptFormat)         | #009F6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenNcs.gif) |
| Green (Pantone)                               | greenPantone($inOptFormat)     | #00AD43              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenPantone.gif) |
| Green (RYB)                                   | greenRyb($inOptFormat)         | #66B032              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenRyb.gif) |
| Green (pigment)                               | greenPigment($inOptFormat)     | #00A550              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenPigment.gif) |
| Green Lizard                                  | greenLizard($inOptFormat)      | #A7F432              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenLizard.gif) |
| Green Sheen                                   | greenSheen($inOptFormat)       | #6EAEA1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenSheen.gif) |
| Green-blue                                    | greenBlue($inOptFormat)        | #1164B4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenBlue.gif) |
| Green-cyan                                    | greenCyan($inOptFormat)        | #009966              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenCyan.gif) |
| Green-yellow                                  | greenYellow($inOptFormat)      | #ADFF2F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/greenYellow.gif) |
| Grizzly                                       | grizzly($inOptFormat)          | #885818              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grizzly.gif) |
| Grullo                                        | grullo($inOptFormat)           | #A99A86              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/grullo.gif) |
| Gunmetal                                      | gunmetal($inOptFormat)         | #2a3439              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/gunmetal.gif) |
| Guppie green                                  | guppieGreen($inOptFormat)      | #00FF7F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/guppieGreen.gif) |
| Halayà úbe                                  | halayaUbe($inOptFormat)        | #663854              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/halayaUbe.gif) |
| Han blue                                      | hanBlue($inOptFormat)          | #446CCF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hanBlue.gif) |
| Han purple                                    | hanPurple($inOptFormat)        | #5218FA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hanPurple.gif) |
| Hansa yellow                                  | hansaYellow($inOptFormat)      | #E9D66B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hansaYellow.gif) |
| Harlequin                                     | harlequin($inOptFormat)        | #3FFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/harlequin.gif) |
| Harlequin green                               | harlequinGreen($inOptFormat)   | #46CB18              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/harlequinGreen.gif) |
| Harvard crimson                               | harvardCrimson($inOptFormat)   | #C90016              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/harvardCrimson.gif) |
| Harvest gold                                  | harvestGold($inOptFormat)      | #DA9100              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/harvestGold.gif) |
| Heart Gold                                    | heartGold($inOptFormat)        | #808000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heartGold.gif) |
| Heat Wave                                     | heatWave($inOptFormat)         | #FF7A00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heatWave.gif) |
| Heidelberg Red[2]                             | heidelbergRed2($inOptFormat)   | #960018              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heidelbergRed2.gif) |
| Heliotrope                                    | heliotrope($inOptFormat)       | #DF73FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heliotrope.gif) |
| Heliotrope gray                               | heliotropeGray($inOptFormat)   | #AA98A9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heliotropeGray.gif) |
| Heliotrope magenta                            | heliotropeMagenta($inOptFormat) | #AA00BB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/heliotropeMagenta.gif) |
| Hollywood cerise                              | hollywoodCerise($inOptFormat)  | #F400A1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hollywoodCerise.gif) |
| Honeydew                                      | honeydew($inOptFormat)         | #F0FFF0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/honeydew.gif) |
| Honolulu blue                                 | honoluluBlue($inOptFormat)     | #006DB0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/honoluluBlue.gif) |
| Hooker's green                                | hookersGreen($inOptFormat)     | #49796B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hookersGreen.gif) |
| Hot magenta                                   | hotMagenta($inOptFormat)       | #FF1DCE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hotMagenta.gif) |
| Hot pink                                      | hotPink($inOptFormat)          | #FF69B4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hotPink.gif) |
| Hunter green                                  | hunterGreen($inOptFormat)      | #355E3B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/hunterGreen.gif) |
| Iceberg                                       | iceberg($inOptFormat)          | #71A6D2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/iceberg.gif) |
| Icterine                                      | icterine($inOptFormat)         | #FCF75E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/icterine.gif) |
| Iguana Green                                  | iguanaGreen($inOptFormat)      | #71BC78              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/iguanaGreen.gif) |
| Illuminating Emerald                          | illuminatingEmerald($inOptFormat) | #319177              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/illuminatingEmerald.gif) |
| Imperial                                      | imperial($inOptFormat)         | #602F6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/imperial.gif) |
| Imperial blue                                 | imperialBlue($inOptFormat)     | #002395              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/imperialBlue.gif) |
| Imperial purple                               | imperialPurple($inOptFormat)   | #66023C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/imperialPurple.gif) |
| Imperial red                                  | imperialRed($inOptFormat)      | #ED2939              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/imperialRed.gif) |
| Inchworm                                      | inchworm($inOptFormat)         | #B2EC5D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/inchworm.gif) |
| Independence                                  | independence($inOptFormat)     | #4C516D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/independence.gif) |
| India green                                   | indiaGreen($inOptFormat)       | #138808              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indiaGreen.gif) |
| Indian red                                    | indianRed($inOptFormat)        | #CD5C5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indianRed.gif) |
| Indian yellow                                 | indianYellow($inOptFormat)     | #E3A857              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indianYellow.gif) |
| Indigo                                        | indigo($inOptFormat)           | #4B0082              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indigo.gif) |
| Indigo (web)                                  | indigoWeb($inOptFormat)        | #4B0082              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indigoWeb.gif) |
| Indigo dye                                    | indigoDye($inOptFormat)        | #091F92              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/indigoDye.gif) |
| Infra Red                                     | infraRed($inOptFormat)         | #FF496C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/infraRed.gif) |
| Interdimensional Blue                         | interdimensionalBlue($inOptFormat) | #360CCC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/interdimensionalBlue.gif) |
| International Klein Blue                      | internationalKleinBlue($inOptFormat) | #002FA7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/internationalKleinBlue.gif) |
| International orange (Golden Gate Bridge)     | internationalOrangeGoldenGateBridge($inOptFormat) | #C0362C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/internationalOrangeGoldenGateBridge.gif) |
| International orange (aerospace)              | internationalOrangeAerospace($inOptFormat) | #FF4F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/internationalOrangeAerospace.gif) |
| International orange (engineering)            | internationalOrangeEngineering($inOptFormat) | #BA160C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/internationalOrangeEngineering.gif) |
| Iris                                          | iris($inOptFormat)             | #5A4FCF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/iris.gif) |
| Irresistible                                  | irresistible($inOptFormat)     | #B3446C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/irresistible.gif) |
| Isabelline                                    | isabelline($inOptFormat)       | #F4F0EC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/isabelline.gif) |
| Islamic green                                 | islamicGreen($inOptFormat)     | #009000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/islamicGreen.gif) |
| Italian sky blue                              | italianSkyBlue($inOptFormat)   | #B2FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/italianSkyBlue.gif) |
| Ivory                                         | ivory($inOptFormat)            | #FFFFF0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ivory.gif) |
| Jade                                          | jade($inOptFormat)             | #00A86B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jade.gif) |
| Japanese carmine                              | japaneseCarmine($inOptFormat)  | #9D2933              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/japaneseCarmine.gif) |
| Japanese indigo                               | japaneseIndigo($inOptFormat)   | #264348              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/japaneseIndigo.gif) |
| Japanese violet                               | japaneseViolet($inOptFormat)   | #5B3256              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/japaneseViolet.gif) |
| Jasmine                                       | jasmine($inOptFormat)          | #F8DE7E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jasmine.gif) |
| Jasper                                        | jasper($inOptFormat)           | #D73B3E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jasper.gif) |
| Jazzberry jam                                 | jazzberryJam($inOptFormat)     | #A50B5E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jazzberryJam.gif) |
| Jelly Bean                                    | jellyBean($inOptFormat)        | #DA614E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jellyBean.gif) |
| Jet                                           | jet($inOptFormat)              | #343434              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jet.gif) |
| Jonquil                                       | jonquil($inOptFormat)          | #F4CA16              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jonquil.gif) |
| Jordy blue                                    | jordyBlue($inOptFormat)        | #8AB9F1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jordyBlue.gif) |
| June bud                                      | juneBud($inOptFormat)          | #BDDA57              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/juneBud.gif) |
| Jungle green                                  | jungleGreen($inOptFormat)      | #29AB87              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/jungleGreen.gif) |
| KSU Purple                                    | ksuPurple($inOptFormat)        | #512888              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ksuPurple.gif) |
| KU Crimson                                    | kuCrimson($inOptFormat)        | #E8000D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kuCrimson.gif) |
| Kelly green                                   | kellyGreen($inOptFormat)       | #4CBB17              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kellyGreen.gif) |
| Kenyan copper                                 | kenyanCopper($inOptFormat)     | #7C1C05              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kenyanCopper.gif) |
| Keppel                                        | keppel($inOptFormat)           | #3AB09E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/keppel.gif) |
| Key Lime                                      | keyLime($inOptFormat)          | #E8F48C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/keyLime.gif) |
| Khaki (HTML/CSS) (Khaki)                      | khakiHtmlCssKhaki($inOptFormat) | #C3B091              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/khakiHtmlCssKhaki.gif) |
| Khaki (X11) (Light khaki)                     | khakiX11LightKhaki($inOptFormat) | #F0E68C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/khakiX11LightKhaki.gif) |
| Kiwi                                          | kiwi($inOptFormat)             | #8EE53F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kiwi.gif) |
| Kobe                                          | kobe($inOptFormat)             | #882D17              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kobe.gif) |
| Kobi                                          | kobi($inOptFormat)             | #E79FC4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kobi.gif) |
| Kobicha                                       | kobicha($inOptFormat)          | #6B4423              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kobicha.gif) |
| Kombu green                                   | kombuGreen($inOptFormat)       | #354230              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/kombuGreen.gif) |
| La Salle Green                                | laSalleGreen($inOptFormat)     | #087830              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/laSalleGreen.gif) |
| Languid lavender                              | languidLavender($inOptFormat)  | #D6CADD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/languidLavender.gif) |
| Lapis lazuli                                  | lapisLazuli($inOptFormat)      | #26619C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lapisLazuli.gif) |
| Laser Lemon                                   | laserLemon($inOptFormat)       | #FFFF66              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/laserLemon.gif) |
| Laurel green                                  | laurelGreen($inOptFormat)      | #A9BA9D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/laurelGreen.gif) |
| Lava                                          | lava($inOptFormat)             | #CF1020              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lava.gif) |
| Lavender (floral)                             | lavenderFloral($inOptFormat)   | #B57EDC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderFloral.gif) |
| Lavender (web)                                | lavenderWeb($inOptFormat)      | #E6E6FA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderWeb.gif) |
| Lavender blue                                 | lavenderBlue($inOptFormat)     | #CCCCFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderBlue.gif) |
| Lavender blush                                | lavenderBlush($inOptFormat)    | #FFF0F5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderBlush.gif) |
| Lavender gray                                 | lavenderGray($inOptFormat)     | #C4C3D0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderGray.gif) |
| Lavender indigo                               | lavenderIndigo($inOptFormat)   | #9457EB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderIndigo.gif) |
| Lavender magenta                              | lavenderMagenta($inOptFormat)  | #EE82EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderMagenta.gif) |
| Lavender mist                                 | lavenderMist($inOptFormat)     | #E6E6FA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderMist.gif) |
| Lavender pink                                 | lavenderPink($inOptFormat)     | #FBAED2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderPink.gif) |
| Lavender purple                               | lavenderPurple($inOptFormat)   | #967BB6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderPurple.gif) |
| Lavender rose                                 | lavenderRose($inOptFormat)     | #FBA0E3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lavenderRose.gif) |
| Lawn green                                    | lawnGreen($inOptFormat)        | #7CFC00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lawnGreen.gif) |
| Lemon                                         | lemon($inOptFormat)            | #FFF700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemon.gif) |
| Lemon chiffon                                 | lemonChiffon($inOptFormat)     | #FFFACD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonChiffon.gif) |
| Lemon curry                                   | lemonCurry($inOptFormat)       | #CCA01D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonCurry.gif) |
| Lemon glacier                                 | lemonGlacier($inOptFormat)     | #FDFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonGlacier.gif) |
| Lemon lime                                    | lemonLime($inOptFormat)        | #E3FF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonLime.gif) |
| Lemon meringue                                | lemonMeringue($inOptFormat)    | #F6EABE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonMeringue.gif) |
| Lemon yellow                                  | lemonYellow($inOptFormat)      | #FFF44F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lemonYellow.gif) |
| Liberty                                       | liberty($inOptFormat)          | #545AA7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liberty.gif) |
| Licorice                                      | licorice($inOptFormat)         | #1A1110              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/licorice.gif) |
| Light French beige                            | lightFrenchBeige($inOptFormat) | #C8AD7F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightFrenchBeige.gif) |
| Light Thulian pink                            | lightThulianPink($inOptFormat) | #E68FAC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightThulianPink.gif) |
| Light apricot                                 | lightApricot($inOptFormat)     | #FDD5B1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightApricot.gif) |
| Light blue                                    | lightBlue($inOptFormat)        | #ADD8E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightBlue.gif) |
| Light brown                                   | lightBrown($inOptFormat)       | #B5651D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightBrown.gif) |
| Light carmine pink                            | lightCarminePink($inOptFormat) | #E66771              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCarminePink.gif) |
| Light cobalt blue                             | lightCobaltBlue($inOptFormat)  | #88ACE0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCobaltBlue.gif) |
| Light coral                                   | lightCoral($inOptFormat)       | #F08080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCoral.gif) |
| Light cornflower blue                         | lightCornflowerBlue($inOptFormat) | #93CCEA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCornflowerBlue.gif) |
| Light crimson                                 | lightCrimson($inOptFormat)     | #F56991              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCrimson.gif) |
| Light cyan                                    | lightCyan($inOptFormat)        | #E0FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightCyan.gif) |
| Light deep pink                               | lightDeepPink($inOptFormat)    | #FF5CCD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightDeepPink.gif) |
| Light fuchsia pink                            | lightFuchsiaPink($inOptFormat) | #F984EF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightFuchsiaPink.gif) |
| Light goldenrod yellow                        | lightGoldenrodYellow($inOptFormat) | #FAFAD2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightGoldenrodYellow.gif) |
| Light gray                                    | lightGray($inOptFormat)        | #D3D3D3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightGray.gif) |
| Light grayish magenta                         | lightGrayishMagenta($inOptFormat) | #CC99CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightGrayishMagenta.gif) |
| Light green                                   | lightGreen($inOptFormat)       | #90EE90              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightGreen.gif) |
| Light hot pink                                | lightHotPink($inOptFormat)     | #FFB3DE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightHotPink.gif) |
| Light khaki                                   | lightKhaki($inOptFormat)       | #F0E68C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightKhaki.gif) |
| Light medium orchid                           | lightMediumOrchid($inOptFormat) | #D39BCB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightMediumOrchid.gif) |
| Light moss green                              | lightMossGreen($inOptFormat)   | #ADDFAD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightMossGreen.gif) |
| Light orchid                                  | lightOrchid($inOptFormat)      | #E6A8D7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightOrchid.gif) |
| Light pastel purple                           | lightPastelPurple($inOptFormat) | #B19CD9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightPastelPurple.gif) |
| Light pink                                    | lightPink($inOptFormat)        | #FFB6C1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightPink.gif) |
| Light red ochre                               | lightRedOchre($inOptFormat)    | #E97451              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightRedOchre.gif) |
| Light salmon                                  | lightSalmon($inOptFormat)      | #FFA07A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSalmon.gif) |
| Light salmon pink                             | lightSalmonPink($inOptFormat)  | #FF9999              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSalmonPink.gif) |
| Light sea green                               | lightSeaGreen($inOptFormat)    | #20B2AA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSeaGreen.gif) |
| Light sky blue                                | lightSkyBlue($inOptFormat)     | #87CEFA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSkyBlue.gif) |
| Light slate gray                              | lightSlateGray($inOptFormat)   | #778899              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSlateGray.gif) |
| Light steel blue                              | lightSteelBlue($inOptFormat)   | #B0C4DE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightSteelBlue.gif) |
| Light taupe                                   | lightTaupe($inOptFormat)       | #B38B6D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightTaupe.gif) |
| Light yellow                                  | lightYellow($inOptFormat)      | #FFFFE0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lightYellow.gif) |
| Lilac                                         | lilac($inOptFormat)            | #C8A2C8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lilac.gif) |
| Lilac Luster                                  | lilacLuster($inOptFormat)      | #AE98AA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lilacLuster.gif) |
| Lime (color wheel)                            | limeColorWheel($inOptFormat)   | #BFFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/limeColorWheel.gif) |
| Lime (web) (X11 green)                        | limeWebX11Green($inOptFormat)  | #00FF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/limeWebX11Green.gif) |
| Lime green                                    | limeGreen($inOptFormat)        | #32CD32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/limeGreen.gif) |
| Limerick                                      | limerick($inOptFormat)         | #9DC209              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/limerick.gif) |
| Lincoln green                                 | lincolnGreen($inOptFormat)     | #195905              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lincolnGreen.gif) |
| Linen                                         | linen($inOptFormat)            | #FAF0E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/linen.gif) |
| Lion                                          | lion($inOptFormat)             | #C19A6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lion.gif) |
| Liseran Purple                                | liseranPurple($inOptFormat)    | #DE6FA1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liseranPurple.gif) |
| Little boy blue                               | littleBoyBlue($inOptFormat)    | #6CA0DC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/littleBoyBlue.gif) |
| Liver                                         | liver($inOptFormat)            | #674C47              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liver.gif) |
| Liver (dogs)                                  | liverDogs($inOptFormat)        | #B86D29              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liverDogs.gif) |
| Liver (organ)                                 | liverOrgan($inOptFormat)       | #6C2E1F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liverOrgan.gif) |
| Liver chestnut                                | liverChestnut($inOptFormat)    | #987456              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/liverChestnut.gif) |
| Livid                                         | livid($inOptFormat)            | #6699CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/livid.gif) |
| Lumber                                        | lumber($inOptFormat)           | #FFE4CD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lumber.gif) |
| Lust                                          | lust($inOptFormat)             | #E62020              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/lust.gif) |
| MSU Green                                     | msuGreen($inOptFormat)         | #18453B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/msuGreen.gif) |
| Maastricht Blue                               | maastrichtBlue($inOptFormat)   | #001C3D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maastrichtBlue.gif) |
| Macaroni and Cheese                           | macaroniAndCheese($inOptFormat) | #FFBD88              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/macaroniAndCheese.gif) |
| Madder Lake                                   | madderLake($inOptFormat)       | #CC3336              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/madderLake.gif) |
| Magenta                                       | magenta($inOptFormat)          | #FF00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magenta.gif) |
| Magenta (Crayola)                             | magentaCrayola($inOptFormat)   | #FF55A3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaCrayola.gif) |
| Magenta (Pantone)                             | magentaPantone($inOptFormat)   | #D0417E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaPantone.gif) |
| Magenta (dye)                                 | magentaDye($inOptFormat)       | #CA1F7B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaDye.gif) |
| Magenta (process)                             | magentaProcess($inOptFormat)   | #FF0090              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaProcess.gif) |
| Magenta haze                                  | magentaHaze($inOptFormat)      | #9F4576              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaHaze.gif) |
| Magenta-pink                                  | magentaPink($inOptFormat)      | #CC338B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magentaPink.gif) |
| Magic Potion                                  | magicPotion($inOptFormat)      | #FF4466              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magicPotion.gif) |
| Magic mint                                    | magicMint($inOptFormat)        | #AAF0D1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magicMint.gif) |
| Magnolia                                      | magnolia($inOptFormat)         | #F8F4FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/magnolia.gif) |
| Mahogany                                      | mahogany($inOptFormat)         | #C04000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mahogany.gif) |
| Maize                                         | maize($inOptFormat)            | #FBEC5D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maize.gif) |
| Majorelle Blue                                | majorelleBlue($inOptFormat)    | #6050DC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/majorelleBlue.gif) |
| Malachite                                     | malachite($inOptFormat)        | #0BDA51              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/malachite.gif) |
| Manatee                                       | manatee($inOptFormat)          | #979AAA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/manatee.gif) |
| Mandarin                                      | mandarin($inOptFormat)         | #F37A48              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mandarin.gif) |
| Mango Tango                                   | mangoTango($inOptFormat)       | #FF8243              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mangoTango.gif) |
| Mantis                                        | mantis($inOptFormat)           | #74C365              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mantis.gif) |
| Mardi Gras                                    | mardiGras($inOptFormat)        | #880085              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mardiGras.gif) |
| Marigold                                      | marigold($inOptFormat)         | #EAA221              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/marigold.gif) |
| Maroon (Crayola)                              | maroonCrayola($inOptFormat)    | #C32148              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maroonCrayola.gif) |
| Maroon (HTML/CSS)                             | maroonHtmlCss($inOptFormat)    | #800000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maroonHtmlCss.gif) |
| Maroon (X11)                                  | maroonX11($inOptFormat)        | #B03060              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maroonX11.gif) |
| Mauve                                         | mauve($inOptFormat)            | #E0B0FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mauve.gif) |
| Mauve taupe                                   | mauveTaupe($inOptFormat)       | #915F6D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mauveTaupe.gif) |
| Mauvelous                                     | mauvelous($inOptFormat)        | #EF98AA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mauvelous.gif) |
| Maximum Blue                                  | maximumBlue($inOptFormat)      | #47ABCC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumBlue.gif) |
| Maximum Blue Green                            | maximumBlueGreen($inOptFormat) | #30BFBF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumBlueGreen.gif) |
| Maximum Blue Purple                           | maximumBluePurple($inOptFormat) | #ACACE6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumBluePurple.gif) |
| Maximum Green                                 | maximumGreen($inOptFormat)     | #5E8C31              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumGreen.gif) |
| Maximum Green Yellow                          | maximumGreenYellow($inOptFormat) | #D9E650              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumGreenYellow.gif) |
| Maximum Purple                                | maximumPurple($inOptFormat)    | #733380              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumPurple.gif) |
| Maximum Red                                   | maximumRed($inOptFormat)       | #D92121              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumRed.gif) |
| Maximum Red Purple                            | maximumRedPurple($inOptFormat) | #A63A79              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumRedPurple.gif) |
| Maximum Yellow                                | maximumYellow($inOptFormat)    | #FAFA37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumYellow.gif) |
| Maximum Yellow Red                            | maximumYellowRed($inOptFormat) | #F2BA49              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/maximumYellowRed.gif) |
| May green                                     | mayGreen($inOptFormat)         | #4C9141              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mayGreen.gif) |
| Maya blue                                     | mayaBlue($inOptFormat)         | #73C2FB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mayaBlue.gif) |
| Meat brown                                    | meatBrown($inOptFormat)        | #E5B73B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/meatBrown.gif) |
| Medium Persian blue                           | mediumPersianBlue($inOptFormat) | #0067A5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumPersianBlue.gif) |
| Medium Tuscan red                             | mediumTuscanRed($inOptFormat)  | #79443B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumTuscanRed.gif) |
| Medium aquamarine                             | mediumAquamarine($inOptFormat) | #66DDAA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumAquamarine.gif) |
| Medium blue                                   | mediumBlue($inOptFormat)       | #0000CD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumBlue.gif) |
| Medium candy apple red                        | mediumCandyAppleRed($inOptFormat) | #E2062C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumCandyAppleRed.gif) |
| Medium carmine                                | mediumCarmine($inOptFormat)    | #AF4035              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumCarmine.gif) |
| Medium champagne                              | mediumChampagne($inOptFormat)  | #F3E5AB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumChampagne.gif) |
| Medium electric blue                          | mediumElectricBlue($inOptFormat) | #035096              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumElectricBlue.gif) |
| Medium jungle green                           | mediumJungleGreen($inOptFormat) | #1C352D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumJungleGreen.gif) |
| Medium lavender magenta                       | mediumLavenderMagenta($inOptFormat) | #DDA0DD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumLavenderMagenta.gif) |
| Medium orchid                                 | mediumOrchid($inOptFormat)     | #BA55D3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumOrchid.gif) |
| Medium purple                                 | mediumPurple($inOptFormat)     | #9370DB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumPurple.gif) |
| Medium red-violet                             | mediumRedViolet($inOptFormat)  | #BB3385              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumRedViolet.gif) |
| Medium ruby                                   | mediumRuby($inOptFormat)       | #AA4069              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumRuby.gif) |
| Medium sea green                              | mediumSeaGreen($inOptFormat)   | #3CB371              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumSeaGreen.gif) |
| Medium sky blue                               | mediumSkyBlue($inOptFormat)    | #80DAEB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumSkyBlue.gif) |
| Medium slate blue                             | mediumSlateBlue($inOptFormat)  | #7B68EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumSlateBlue.gif) |
| Medium spring bud                             | mediumSpringBud($inOptFormat)  | #C9DC87              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumSpringBud.gif) |
| Medium spring green                           | mediumSpringGreen($inOptFormat) | #00FA9A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumSpringGreen.gif) |
| Medium taupe                                  | mediumTaupe($inOptFormat)      | #674C47              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumTaupe.gif) |
| Medium turquoise                              | mediumTurquoise($inOptFormat)  | #48D1CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumTurquoise.gif) |
| Medium vermilion                              | mediumVermilion($inOptFormat)  | #D9603B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumVermilion.gif) |
| Medium violet-red                             | mediumVioletRed($inOptFormat)  | #C71585              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mediumVioletRed.gif) |
| Mellow apricot                                | mellowApricot($inOptFormat)    | #F8B878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mellowApricot.gif) |
| Mellow yellow                                 | mellowYellow($inOptFormat)     | #F8DE7E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mellowYellow.gif) |
| Melon                                         | melon($inOptFormat)            | #FDBCB4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/melon.gif) |
| Metallic Seaweed                              | metallicSeaweed($inOptFormat)  | #0A7E8C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/metallicSeaweed.gif) |
| Metallic Sunburst                             | metallicSunburst($inOptFormat) | #9C7C38              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/metallicSunburst.gif) |
| Mexican pink                                  | mexicanPink($inOptFormat)      | #E4007C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mexicanPink.gif) |
| Middle Blue                                   | middleBlue($inOptFormat)       | #7ED4E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleBlue.gif) |
| Middle Blue Green                             | middleBlueGreen($inOptFormat)  | #8DD9CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleBlueGreen.gif) |
| Middle Blue Purple                            | middleBluePurple($inOptFormat) | #8B72BE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleBluePurple.gif) |
| Middle Green                                  | middleGreen($inOptFormat)      | #4D8C57              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleGreen.gif) |
| Middle Green Yellow                           | middleGreenYellow($inOptFormat) | #ACBF60              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleGreenYellow.gif) |
| Middle Purple                                 | middlePurple($inOptFormat)     | #D982B5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middlePurple.gif) |
| Middle Red                                    | middleRed($inOptFormat)        | #E58E73              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleRed.gif) |
| Middle Red Purple                             | middleRedPurple($inOptFormat)  | #A55353              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleRedPurple.gif) |
| Middle Yellow                                 | middleYellow($inOptFormat)     | #FFEB00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleYellow.gif) |
| Middle Yellow Red                             | middleYellowRed($inOptFormat)  | #ECB176              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/middleYellowRed.gif) |
| Midnight                                      | midnight($inOptFormat)         | #702670              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/midnight.gif) |
| Midnight blue                                 | midnightBlue($inOptFormat)     | #191970              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/midnightBlue.gif) |
| Midnight green (eagle green)                  | midnightGreenEagleGreen($inOptFormat) | #004953              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/midnightGreenEagleGreen.gif) |
| Mikado yellow                                 | mikadoYellow($inOptFormat)     | #FFC40C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mikadoYellow.gif) |
| Mimi Pink                                     | mimiPink($inOptFormat)         | #FFDAE9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mimiPink.gif) |
| Mindaro                                       | mindaro($inOptFormat)          | #E3F988              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mindaro.gif) |
| Ming                                          | ming($inOptFormat)             | #36747D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ming.gif) |
| Minion Yellow                                 | minionYellow($inOptFormat)     | #F5E050              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/minionYellow.gif) |
| Mint                                          | mint($inOptFormat)             | #3EB489              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mint.gif) |
| Mint cream                                    | mintCream($inOptFormat)        | #F5FFFA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mintCream.gif) |
| Mint green                                    | mintGreen($inOptFormat)        | #98FF98              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mintGreen.gif) |
| Misty Moss                                    | mistyMoss($inOptFormat)        | #BBB477              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mistyMoss.gif) |
| Misty rose                                    | mistyRose($inOptFormat)        | #FFE4E1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mistyRose.gif) |
| Moccasin                                      | moccasin($inOptFormat)         | #FAEBD7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/moccasin.gif) |
| Mode beige                                    | modeBeige($inOptFormat)        | #967117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/modeBeige.gif) |
| Moonstone blue                                | moonstoneBlue($inOptFormat)    | #73A9C2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/moonstoneBlue.gif) |
| Mordant red 19                                | mordantRed19($inOptFormat)     | #AE0C00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mordantRed19.gif) |
| Moss green                                    | mossGreen($inOptFormat)        | #8A9A5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mossGreen.gif) |
| Mountain Meadow                               | mountainMeadow($inOptFormat)   | #30BA8F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mountainMeadow.gif) |
| Mountbatten pink                              | mountbattenPink($inOptFormat)  | #997A8D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mountbattenPink.gif) |
| Mughal green                                  | mughalGreen($inOptFormat)      | #306030              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mughalGreen.gif) |
| Mulberry                                      | mulberry($inOptFormat)         | #C54B8C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mulberry.gif) |
| Mummy's Tomb                                  | mummysTomb($inOptFormat)       | #828E84              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mummysTomb.gif) |
| Mustard                                       | mustard($inOptFormat)          | #FFDB58              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mustard.gif) |
| Myrtle green                                  | myrtleGreen($inOptFormat)      | #317873              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/myrtleGreen.gif) |
| Mystic                                        | mystic($inOptFormat)           | #D65282              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mystic.gif) |
| Mystic Maroon                                 | mysticMaroon($inOptFormat)     | #AD4379              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/mysticMaroon.gif) |
| Nadeshiko pink                                | nadeshikoPink($inOptFormat)    | #F6ADC6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/nadeshikoPink.gif) |
| Napier green                                  | napierGreen($inOptFormat)      | #2A8000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/napierGreen.gif) |
| Naples yellow                                 | naplesYellow($inOptFormat)     | #FADA5E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/naplesYellow.gif) |
| Navajo white                                  | navajoWhite($inOptFormat)      | #FFDEAD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/navajoWhite.gif) |
| Navy                                          | navy($inOptFormat)             | #000080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/navy.gif) |
| Navy purple                                   | navyPurple($inOptFormat)       | #9457EB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/navyPurple.gif) |
| Neon Carrot                                   | neonCarrot($inOptFormat)       | #FFA343              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/neonCarrot.gif) |
| Neon fuchsia                                  | neonFuchsia($inOptFormat)      | #FE4164              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/neonFuchsia.gif) |
| Neon green                                    | neonGreen($inOptFormat)        | #39FF14              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/neonGreen.gif) |
| New Car                                       | newCar($inOptFormat)           | #214FC6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/newCar.gif) |
| New York pink                                 | newYorkPink($inOptFormat)      | #D7837F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/newYorkPink.gif) |
| Nickel                                        | nickel($inOptFormat)           | #727472              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/nickel.gif) |
| Non-photo blue                                | nonPhotoBlue($inOptFormat)     | #A4DDED              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/nonPhotoBlue.gif) |
| North Texas Green                             | northTexasGreen($inOptFormat)  | #059033              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/northTexasGreen.gif) |
| Nyanza                                        | nyanza($inOptFormat)           | #E9FFDB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/nyanza.gif) |
| OU Crimson Red                                | ouCrimsonRed($inOptFormat)     | #990000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ouCrimsonRed.gif) |
| Ocean Blue                                    | oceanBlue($inOptFormat)        | #4F42B5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oceanBlue.gif) |
| Ocean Boat Blue                               | oceanBoatBlue($inOptFormat)    | #0077BE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oceanBoatBlue.gif) |
| Ocean Green                                   | oceanGreen($inOptFormat)       | #48BF91              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oceanGreen.gif) |
| Ochre                                         | ochre($inOptFormat)            | #CC7722              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ochre.gif) |
| Office green                                  | officeGreen($inOptFormat)      | #008000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/officeGreen.gif) |
| Ogre Odor                                     | ogreOdor($inOptFormat)         | #FD5240              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ogreOdor.gif) |
| Old burgundy                                  | oldBurgundy($inOptFormat)      | #43302E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldBurgundy.gif) |
| Old gold                                      | oldGold($inOptFormat)          | #CFB53B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldGold.gif) |
| Old heliotrope                                | oldHeliotrope($inOptFormat)    | #563C5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldHeliotrope.gif) |
| Old lace                                      | oldLace($inOptFormat)          | #FDF5E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldLace.gif) |
| Old lavender                                  | oldLavender($inOptFormat)      | #796878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldLavender.gif) |
| Old mauve                                     | oldMauve($inOptFormat)         | #673147              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldMauve.gif) |
| Old moss green                                | oldMossGreen($inOptFormat)     | #867E36              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldMossGreen.gif) |
| Old rose                                      | oldRose($inOptFormat)          | #C08081              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldRose.gif) |
| Old silver                                    | oldSilver($inOptFormat)        | #848482              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oldSilver.gif) |
| Olive                                         | olive($inOptFormat)            | #808000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/olive.gif) |
| Olive Drab #7                                 | oliveDrab7($inOptFormat)       | #3C341F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oliveDrab7.gif) |
| Olive Drab (#3)                               | oliveDrab3($inOptFormat)       | #6B8E23              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oliveDrab3.gif) |
| Olivine                                       | olivine($inOptFormat)          | #9AB973              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/olivine.gif) |
| Onyx                                          | onyx($inOptFormat)             | #353839              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/onyx.gif) |
| Opera mauve                                   | operaMauve($inOptFormat)       | #B784A7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/operaMauve.gif) |
| Orange (Crayola)                              | orangeCrayola($inOptFormat)    | #FF7538              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeCrayola.gif) |
| Orange (Pantone)                              | orangePantone($inOptFormat)    | #FF5800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangePantone.gif) |
| Orange (RYB)                                  | orangeRyb($inOptFormat)        | #FB9902              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeRyb.gif) |
| Orange (color wheel)                          | orangeColorWheel($inOptFormat) | #FF7F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeColorWheel.gif) |
| Orange (web)                                  | orangeWeb($inOptFormat)        | #FFA500              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeWeb.gif) |
| Orange Soda                                   | orangeSoda($inOptFormat)       | #FA5B3D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeSoda.gif) |
| Orange peel                                   | orangePeel($inOptFormat)       | #FF9F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangePeel.gif) |
| Orange-red                                    | orangeRed($inOptFormat)        | #FF4500              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeRed.gif) |
| Orange-yellow                                 | orangeYellow($inOptFormat)     | #F8D568              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orangeYellow.gif) |
| Orchid                                        | orchid($inOptFormat)           | #DA70D6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orchid.gif) |
| Orchid pink                                   | orchidPink($inOptFormat)       | #F2BDCD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/orchidPink.gif) |
| Orioles orange                                | oriolesOrange($inOptFormat)    | #FB4F14              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oriolesOrange.gif) |
| Otter brown                                   | otterBrown($inOptFormat)       | #654321              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/otterBrown.gif) |
| Outer Space                                   | outerSpace($inOptFormat)       | #414A4C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/outerSpace.gif) |
| Outrageous Orange                             | outrageousOrange($inOptFormat) | #FF6E4A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/outrageousOrange.gif) |
| Oxford Blue                                   | oxfordBlue($inOptFormat)       | #002147              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/oxfordBlue.gif) |
| Pacific Blue                                  | pacificBlue($inOptFormat)      | #1CA9C9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pacificBlue.gif) |
| Pakistan green                                | pakistanGreen($inOptFormat)    | #006600              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pakistanGreen.gif) |
| Palatinate blue                               | palatinateBlue($inOptFormat)   | #273BE2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/palatinateBlue.gif) |
| Palatinate purple                             | palatinatePurple($inOptFormat) | #682860              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/palatinatePurple.gif) |
| Pale aqua                                     | paleAqua($inOptFormat)         | #BCD4E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleAqua.gif) |
| Pale blue                                     | paleBlue($inOptFormat)         | #AFEEEE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleBlue.gif) |
| Pale brown                                    | paleBrown($inOptFormat)        | #987654              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleBrown.gif) |
| Pale carmine                                  | paleCarmine($inOptFormat)      | #AF4035              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleCarmine.gif) |
| Pale cerulean                                 | paleCerulean($inOptFormat)     | #9BC4E2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleCerulean.gif) |
| Pale chestnut                                 | paleChestnut($inOptFormat)     | #DDADAF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleChestnut.gif) |
| Pale copper                                   | paleCopper($inOptFormat)       | #DA8A67              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleCopper.gif) |
| Pale cornflower blue                          | paleCornflowerBlue($inOptFormat) | #ABCDEF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleCornflowerBlue.gif) |
| Pale cyan                                     | paleCyan($inOptFormat)         | #87D3F8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleCyan.gif) |
| Pale gold                                     | paleGold($inOptFormat)         | #E6BE8A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleGold.gif) |
| Pale goldenrod                                | paleGoldenrod($inOptFormat)    | #EEE8AA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleGoldenrod.gif) |
| Pale green                                    | paleGreen($inOptFormat)        | #98FB98              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleGreen.gif) |
| Pale lavender                                 | paleLavender($inOptFormat)     | #DCD0FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleLavender.gif) |
| Pale magenta                                  | paleMagenta($inOptFormat)      | #F984E5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleMagenta.gif) |
| Pale magenta-pink                             | paleMagentaPink($inOptFormat)  | #FF99CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleMagentaPink.gif) |
| Pale pink                                     | palePink($inOptFormat)         | #FADADD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/palePink.gif) |
| Pale plum                                     | palePlum($inOptFormat)         | #DDA0DD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/palePlum.gif) |
| Pale red-violet                               | paleRedViolet($inOptFormat)    | #DB7093              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleRedViolet.gif) |
| Pale robin egg blue                           | paleRobinEggBlue($inOptFormat) | #96DED1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleRobinEggBlue.gif) |
| Pale silver                                   | paleSilver($inOptFormat)       | #C9C0BB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleSilver.gif) |
| Pale spring bud                               | paleSpringBud($inOptFormat)    | #ECEBBD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleSpringBud.gif) |
| Pale taupe                                    | paleTaupe($inOptFormat)        | #BC987E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleTaupe.gif) |
| Pale turquoise                                | paleTurquoise($inOptFormat)    | #AFEEEE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleTurquoise.gif) |
| Pale violet                                   | paleViolet($inOptFormat)       | #CC99FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleViolet.gif) |
| Pale violet-red                               | paleVioletRed($inOptFormat)    | #DB7093              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paleVioletRed.gif) |
| Palm Leaf                                     | palmLeaf($inOptFormat)         | #6F9940              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/palmLeaf.gif) |
| Pansy purple                                  | pansyPurple($inOptFormat)      | #78184A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pansyPurple.gif) |
| Paolo Veronese green                          | paoloVeroneseGreen($inOptFormat) | #009B7D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paoloVeroneseGreen.gif) |
| Papaya whip                                   | papayaWhip($inOptFormat)       | #FFEFD5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/papayaWhip.gif) |
| Paradise pink                                 | paradisePink($inOptFormat)     | #E63E62              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paradisePink.gif) |
| Paris Green                                   | parisGreen($inOptFormat)       | #50C878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/parisGreen.gif) |
| Parrot Pink                                   | parrotPink($inOptFormat)       | #D998A0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/parrotPink.gif) |
| Pastel blue                                   | pastelBlue($inOptFormat)       | #AEC6CF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelBlue.gif) |
| Pastel brown                                  | pastelBrown($inOptFormat)      | #836953              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelBrown.gif) |
| Pastel gray                                   | pastelGray($inOptFormat)       | #CFCFC4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelGray.gif) |
| Pastel green                                  | pastelGreen($inOptFormat)      | #77DD77              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelGreen.gif) |
| Pastel magenta                                | pastelMagenta($inOptFormat)    | #F49AC2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelMagenta.gif) |
| Pastel orange                                 | pastelOrange($inOptFormat)     | #FFB347              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelOrange.gif) |
| Pastel pink                                   | pastelPink($inOptFormat)       | #DEA5A4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelPink.gif) |
| Pastel purple                                 | pastelPurple($inOptFormat)     | #B39EB5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelPurple.gif) |
| Pastel red                                    | pastelRed($inOptFormat)        | #FF6961              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelRed.gif) |
| Pastel violet                                 | pastelViolet($inOptFormat)     | #CB99C9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelViolet.gif) |
| Pastel yellow                                 | pastelYellow($inOptFormat)     | #FDFD96              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pastelYellow.gif) |
| Patriarch                                     | patriarch($inOptFormat)        | #800080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/patriarch.gif) |
| Payne's grey                                  | paynesGrey($inOptFormat)       | #536878              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/paynesGrey.gif) |
| Peach                                         | peach($inOptFormat)            | #FFCBA4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peach.gif) |
| Peach puff                                    | peachPuff($inOptFormat)        | #FFDAB9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peachPuff.gif) |
| Peach-orange                                  | peachOrange($inOptFormat)      | #FFCC99              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peachOrange.gif) |
| Peach-yellow                                  | peachYellow($inOptFormat)      | #FADFAD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peachYellow.gif) |
| Pear                                          | pear($inOptFormat)             | #D1E231              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pear.gif) |
| Pearl                                         | pearl($inOptFormat)            | #EAE0C8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pearl.gif) |
| Pearl Aqua                                    | pearlAqua($inOptFormat)        | #88D8C0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pearlAqua.gif) |
| Pearly purple                                 | pearlyPurple($inOptFormat)     | #B768A2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pearlyPurple.gif) |
| Peridot                                       | peridot($inOptFormat)          | #E6E200              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peridot.gif) |
| Periwinkle                                    | periwinkle($inOptFormat)       | #CCCCFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/periwinkle.gif) |
| Permanent Geranium Lake                       | permanentGeraniumLake($inOptFormat) | #E12C2C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/permanentGeraniumLake.gif) |
| Persian blue                                  | persianBlue($inOptFormat)      | #1C39BB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianBlue.gif) |
| Persian green                                 | persianGreen($inOptFormat)     | #00A693              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianGreen.gif) |
| Persian indigo                                | persianIndigo($inOptFormat)    | #32127A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianIndigo.gif) |
| Persian orange                                | persianOrange($inOptFormat)    | #D99058              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianOrange.gif) |
| Persian pink                                  | persianPink($inOptFormat)      | #F77FBE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianPink.gif) |
| Persian plum                                  | persianPlum($inOptFormat)      | #701C1C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianPlum.gif) |
| Persian red                                   | persianRed($inOptFormat)       | #CC3333              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianRed.gif) |
| Persian rose                                  | persianRose($inOptFormat)      | #FE28A2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persianRose.gif) |
| Persimmon                                     | persimmon($inOptFormat)        | #EC5800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/persimmon.gif) |
| Peru                                          | peru($inOptFormat)             | #CD853F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/peru.gif) |
| Pewter Blue                                   | pewterBlue($inOptFormat)       | #8BA8B7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pewterBlue.gif) |
| Phlox                                         | phlox($inOptFormat)            | #DF00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/phlox.gif) |
| Phthalo blue                                  | phthaloBlue($inOptFormat)      | #000F89              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/phthaloBlue.gif) |
| Phthalo green                                 | phthaloGreen($inOptFormat)     | #123524              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/phthaloGreen.gif) |
| Picton blue                                   | pictonBlue($inOptFormat)       | #45B1E8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pictonBlue.gif) |
| Pictorial carmine                             | pictorialCarmine($inOptFormat) | #C30B4E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pictorialCarmine.gif) |
| Piggy pink                                    | piggyPink($inOptFormat)        | #FDDDE6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/piggyPink.gif) |
| Pine green                                    | pineGreen($inOptFormat)        | #01796F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pineGreen.gif) |
| Pineapple                                     | pineapple($inOptFormat)        | #563C5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pineapple.gif) |
| Pink                                          | pink($inOptFormat)             | #FFC0CB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pink.gif) |
| Pink (Pantone)                                | pinkPantone($inOptFormat)      | #D74894              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkPantone.gif) |
| Pink Flamingo                                 | pinkFlamingo($inOptFormat)     | #FC74FD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkFlamingo.gif) |
| Pink Sherbet                                  | pinkSherbet($inOptFormat)      | #F78FA7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkSherbet.gif) |
| Pink lace                                     | pinkLace($inOptFormat)         | #FFDDF4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkLace.gif) |
| Pink lavender                                 | pinkLavender($inOptFormat)     | #D8B2D1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkLavender.gif) |
| Pink pearl                                    | pinkPearl($inOptFormat)        | #E7ACCF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkPearl.gif) |
| Pink raspberry                                | pinkRaspberry($inOptFormat)    | #980036              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkRaspberry.gif) |
| Pink-orange                                   | pinkOrange($inOptFormat)       | #FF9966              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pinkOrange.gif) |
| Pistachio                                     | pistachio($inOptFormat)        | #93C572              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pistachio.gif) |
| Pixie Powder                                  | pixiePowder($inOptFormat)      | #391285              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pixiePowder.gif) |
| Platinum                                      | platinum($inOptFormat)         | #E5E4E2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/platinum.gif) |
| Plum                                          | plum($inOptFormat)             | #8E4585              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/plum.gif) |
| Plum (web)                                    | plumWeb($inOptFormat)          | #DDA0DD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/plumWeb.gif) |
| Plump Purple                                  | plumpPurple($inOptFormat)      | #5946B2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/plumpPurple.gif) |
| Polished Pine                                 | polishedPine($inOptFormat)     | #5DA493              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/polishedPine.gif) |
| Pomp and Power                                | pompAndPower($inOptFormat)     | #86608E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pompAndPower.gif) |
| Popstar                                       | popstar($inOptFormat)          | #BE4F62              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/popstar.gif) |
| Portland Orange                               | portlandOrange($inOptFormat)   | #FF5A36              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/portlandOrange.gif) |
| Powder blue                                   | powderBlue($inOptFormat)       | #B0E0E6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/powderBlue.gif) |
| Princess Perfume                              | princessPerfume($inOptFormat)  | #FF85CF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/princessPerfume.gif) |
| Princeton orange                              | princetonOrange($inOptFormat)  | #F58025              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/princetonOrange.gif) |
| Prune                                         | prune($inOptFormat)            | #701C1C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/prune.gif) |
| Prussian blue                                 | prussianBlue($inOptFormat)     | #003153              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/prussianBlue.gif) |
| Psychedelic purple                            | psychedelicPurple($inOptFormat) | #DF00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/psychedelicPurple.gif) |
| Puce                                          | puce($inOptFormat)             | #CC8899              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/puce.gif) |
| Puce red                                      | puceRed($inOptFormat)          | #722F37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/puceRed.gif) |
| Pullman Brown (UPS Brown)                     | pullmanBrownUpsBrown($inOptFormat) | #644117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pullmanBrownUpsBrown.gif) |
| Pullman Green                                 | pullmanGreen($inOptFormat)     | #3B331C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pullmanGreen.gif) |
| Pumpkin                                       | pumpkin($inOptFormat)          | #FF7518              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/pumpkin.gif) |
| Purple (HTML)                                 | purpleHtml($inOptFormat)       | #800080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleHtml.gif) |
| Purple (Munsell)                              | purpleMunsell($inOptFormat)    | #9F00C5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleMunsell.gif) |
| Purple (X11)                                  | purpleX11($inOptFormat)        | #A020F0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleX11.gif) |
| Purple Heart                                  | purpleHeart($inOptFormat)      | #69359C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleHeart.gif) |
| Purple Plum                                   | purplePlum($inOptFormat)       | #9C51B6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purplePlum.gif) |
| Purple mountain majesty                       | purpleMountainMajesty($inOptFormat) | #9678B6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleMountainMajesty.gif) |
| Purple navy                                   | purpleNavy($inOptFormat)       | #4E5180              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleNavy.gif) |
| Purple pizzazz                                | purplePizzazz($inOptFormat)    | #FE4EDA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purplePizzazz.gif) |
| Purple taupe                                  | purpleTaupe($inOptFormat)      | #50404D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpleTaupe.gif) |
| Purpureus                                     | purpureus($inOptFormat)        | #9A4EAE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/purpureus.gif) |
| Quartz                                        | quartz($inOptFormat)           | #51484F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/quartz.gif) |
| Queen blue                                    | queenBlue($inOptFormat)        | #436B95              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/queenBlue.gif) |
| Queen pink                                    | queenPink($inOptFormat)        | #E8CCD7              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/queenPink.gif) |
| Quick Silver                                  | quickSilver($inOptFormat)      | #A6A6A6              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/quickSilver.gif) |
| Quinacridone magenta                          | quinacridoneMagenta($inOptFormat) | #8E3A59              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/quinacridoneMagenta.gif) |
| Rackley                                       | rackley($inOptFormat)          | #5D8AA8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rackley.gif) |
| Radical Red                                   | radicalRed($inOptFormat)       | #FF355E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/radicalRed.gif) |
| Raisin black                                  | raisinBlack($inOptFormat)      | #242124              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/raisinBlack.gif) |
| Rajah                                         | rajah($inOptFormat)            | #FBAB60              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rajah.gif) |
| Raspberry                                     | raspberry($inOptFormat)        | #E30B5D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/raspberry.gif) |
| Raspberry glace                               | raspberryGlace($inOptFormat)   | #915F6D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/raspberryGlace.gif) |
| Raspberry pink                                | raspberryPink($inOptFormat)    | #E25098              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/raspberryPink.gif) |
| Raspberry rose                                | raspberryRose($inOptFormat)    | #B3446C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/raspberryRose.gif) |
| Raw Sienna                                    | rawSienna($inOptFormat)        | #D68A59              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rawSienna.gif) |
| Raw umber                                     | rawUmber($inOptFormat)         | #826644              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rawUmber.gif) |
| Razzle dazzle rose                            | razzleDazzleRose($inOptFormat) | #FF33CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/razzleDazzleRose.gif) |
| Razzmatazz                                    | razzmatazz($inOptFormat)       | #E3256B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/razzmatazz.gif) |
| Razzmic Berry                                 | razzmicBerry($inOptFormat)     | #8D4E85              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/razzmicBerry.gif) |
| Rebecca Purple                                | rebeccaPurple($inOptFormat)    | #663399              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rebeccaPurple.gif) |
| Red                                           | red($inOptFormat)              | #FF0000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/red.gif) |
| Red (Crayola)                                 | redCrayola($inOptFormat)       | #EE204D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redCrayola.gif) |
| Red (Munsell)                                 | redMunsell($inOptFormat)       | #F2003C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redMunsell.gif) |
| Red (NCS)                                     | redNcs($inOptFormat)           | #C40233              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redNcs.gif) |
| Red (Pantone)                                 | redPantone($inOptFormat)       | #ED2939              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redPantone.gif) |
| Red (RYB)                                     | redRyb($inOptFormat)           | #FE2712              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redRyb.gif) |
| Red (pigment)                                 | redPigment($inOptFormat)       | #ED1C24              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redPigment.gif) |
| Red Salsa                                     | redSalsa($inOptFormat)         | #FD3A4A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redSalsa.gif) |
| Red devil                                     | redDevil($inOptFormat)         | #860111              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redDevil.gif) |
| Red-brown                                     | redBrown($inOptFormat)         | #A52A2A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redBrown.gif) |
| Red-orange                                    | redOrange($inOptFormat)        | #FF5349              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redOrange.gif) |
| Red-purple                                    | redPurple($inOptFormat)        | #E40078              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redPurple.gif) |
| Red-violet                                    | redViolet($inOptFormat)        | #C71585              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redViolet.gif) |
| Redwood                                       | redwood($inOptFormat)          | #A45A52              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/redwood.gif) |
| Regalia                                       | regalia($inOptFormat)          | #522D80              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/regalia.gif) |
| Registration black                            | registrationBlack($inOptFormat) | #000000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/registrationBlack.gif) |
| Resolution blue                               | resolutionBlue($inOptFormat)   | #002387              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/resolutionBlue.gif) |
| Rhythm                                        | rhythm($inOptFormat)           | #777696              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rhythm.gif) |
| Rich black                                    | richBlack($inOptFormat)        | #004040              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richBlack.gif) |
| Rich black (FOGRA29)                          | richBlackFogra29($inOptFormat) | #010B13              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richBlackFogra29.gif) |
| Rich black (FOGRA39)                          | richBlackFogra39($inOptFormat) | #010203              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richBlackFogra39.gif) |
| Rich brilliant lavender                       | richBrilliantLavender($inOptFormat) | #F1A7FE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richBrilliantLavender.gif) |
| Rich carmine                                  | richCarmine($inOptFormat)      | #D70040              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richCarmine.gif) |
| Rich electric blue                            | richElectricBlue($inOptFormat) | #0892D0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richElectricBlue.gif) |
| Rich lavender                                 | richLavender($inOptFormat)     | #A76BCF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richLavender.gif) |
| Rich lilac                                    | richLilac($inOptFormat)        | #B666D2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richLilac.gif) |
| Rich maroon                                   | richMaroon($inOptFormat)       | #B03060              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/richMaroon.gif) |
| Rifle green                                   | rifleGreen($inOptFormat)       | #444C38              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rifleGreen.gif) |
| Roast coffee                                  | roastCoffee($inOptFormat)      | #704241              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roastCoffee.gif) |
| Robin egg blue                                | robinEggBlue($inOptFormat)     | #00CCCC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/robinEggBlue.gif) |
| Rocket metallic                               | rocketMetallic($inOptFormat)   | #8A7F80              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rocketMetallic.gif) |
| Roman silver                                  | romanSilver($inOptFormat)      | #838996              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/romanSilver.gif) |
| Rose                                          | rose($inOptFormat)             | #FF007F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rose.gif) |
| Rose Dust                                     | roseDust($inOptFormat)         | #9E5E6F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseDust.gif) |
| Rose bonbon                                   | roseBonbon($inOptFormat)       | #F9429E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseBonbon.gif) |
| Rose ebony                                    | roseEbony($inOptFormat)        | #674846              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseEbony.gif) |
| Rose gold                                     | roseGold($inOptFormat)         | #B76E79              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseGold.gif) |
| Rose madder                                   | roseMadder($inOptFormat)       | #E32636              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseMadder.gif) |
| Rose pink                                     | rosePink($inOptFormat)         | #FF66CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rosePink.gif) |
| Rose quartz                                   | roseQuartz($inOptFormat)       | #AA98A9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseQuartz.gif) |
| Rose red                                      | roseRed($inOptFormat)          | #C21E56              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseRed.gif) |
| Rose taupe                                    | roseTaupe($inOptFormat)        | #905D5D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseTaupe.gif) |
| Rose vale                                     | roseVale($inOptFormat)         | #AB4E52              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/roseVale.gif) |
| Rosewood                                      | rosewood($inOptFormat)         | #65000B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rosewood.gif) |
| Rosso corsa                                   | rossoCorsa($inOptFormat)       | #D40000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rossoCorsa.gif) |
| Rosy brown                                    | rosyBrown($inOptFormat)        | #BC8F8F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rosyBrown.gif) |
| Royal azure                                   | royalAzure($inOptFormat)       | #0038A8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/royalAzure.gif) |
| Royal blue                                    | royalBlue($inOptFormat)        | #4169E1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/royalBlue.gif) |
| Royal fuchsia                                 | royalFuchsia($inOptFormat)     | #CA2C92              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/royalFuchsia.gif) |
| Royal purple                                  | royalPurple($inOptFormat)      | #7851A9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/royalPurple.gif) |
| Royal yellow                                  | royalYellow($inOptFormat)      | #FADA5E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/royalYellow.gif) |
| Ruber                                         | ruber($inOptFormat)            | #CE4676              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ruber.gif) |
| Rubine red                                    | rubineRed($inOptFormat)        | #D10056              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rubineRed.gif) |
| Ruby                                          | ruby($inOptFormat)             | #E0115F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ruby.gif) |
| Ruby red                                      | rubyRed($inOptFormat)          | #9B111E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rubyRed.gif) |
| Ruddy                                         | ruddy($inOptFormat)            | #FF0028              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ruddy.gif) |
| Ruddy brown                                   | ruddyBrown($inOptFormat)       | #BB6528              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ruddyBrown.gif) |
| Ruddy pink                                    | ruddyPink($inOptFormat)        | #E18E96              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ruddyPink.gif) |
| Rufous                                        | rufous($inOptFormat)           | #A81C07              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rufous.gif) |
| Russet                                        | russet($inOptFormat)           | #80461B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/russet.gif) |
| Russian green                                 | russianGreen($inOptFormat)     | #679267              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/russianGreen.gif) |
| Russian violet                                | russianViolet($inOptFormat)    | #32174D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/russianViolet.gif) |
| Rust                                          | rust($inOptFormat)             | #B7410E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rust.gif) |
| Rusty red                                     | rustyRed($inOptFormat)         | #DA2C43              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/rustyRed.gif) |
| Sacramento State green                        | sacramentoStateGreen($inOptFormat) | #00563F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sacramentoStateGreen.gif) |
| Saddle brown                                  | saddleBrown($inOptFormat)      | #8B4513              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/saddleBrown.gif) |
| Safety orange                                 | safetyOrange($inOptFormat)     | #FF7800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/safetyOrange.gif) |
| Safety orange (blaze orange)                  | safetyOrangeBlazeOrange($inOptFormat) | #FF6700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/safetyOrangeBlazeOrange.gif) |
| Safety yellow                                 | safetyYellow($inOptFormat)     | #EED202              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/safetyYellow.gif) |
| Saffron                                       | saffron($inOptFormat)          | #F4C430              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/saffron.gif) |
| Sage                                          | sage($inOptFormat)             | #BCB88A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sage.gif) |
| Salmon                                        | salmon($inOptFormat)           | #FA8072              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/salmon.gif) |
| Salmon pink                                   | salmonPink($inOptFormat)       | #FF91A4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/salmonPink.gif) |
| Sand                                          | sand($inOptFormat)             | #C2B280              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sand.gif) |
| Sand dune                                     | sandDune($inOptFormat)         | #967117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sandDune.gif) |
| Sandstorm                                     | sandstorm($inOptFormat)        | #ECD540              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sandstorm.gif) |
| Sandy Tan                                     | sandyTan($inOptFormat)         | #FDD9B5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sandyTan.gif) |
| Sandy brown                                   | sandyBrown($inOptFormat)       | #F4A460              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sandyBrown.gif) |
| Sandy taupe                                   | sandyTaupe($inOptFormat)       | #967117              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sandyTaupe.gif) |
| Sangria                                       | sangria($inOptFormat)          | #92000A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sangria.gif) |
| Sap green                                     | sapGreen($inOptFormat)         | #507D2A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sapGreen.gif) |
| Sapphire                                      | sapphire($inOptFormat)         | #0F52BA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sapphire.gif) |
| Sapphire blue                                 | sapphireBlue($inOptFormat)     | #0067A5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sapphireBlue.gif) |
| Sasquatch Socks                               | sasquatchSocks($inOptFormat)   | #FF4681              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sasquatchSocks.gif) |
| Satin sheen gold                              | satinSheenGold($inOptFormat)   | #CBA135              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/satinSheenGold.gif) |
| Scarlet                                       | scarlet($inOptFormat)          | #FD0E35              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/scarlet.gif) |
| Schauss pink                                  | schaussPink($inOptFormat)      | #FF91AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/schaussPink.gif) |
| School bus yellow                             | schoolBusYellow($inOptFormat)  | #FFD800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/schoolBusYellow.gif) |
| Screamin' Green                               | screaminGreen($inOptFormat)    | #66FF66              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/screaminGreen.gif) |
| Sea Foam Green                                | seaFoamGreen($inOptFormat)     | #9FE2BF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/seaFoamGreen.gif) |
| Sea Serpent                                   | seaSerpent($inOptFormat)       | #4BC7CF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/seaSerpent.gif) |
| Sea blue                                      | seaBlue($inOptFormat)          | #006994              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/seaBlue.gif) |
| Sea green                                     | seaGreen($inOptFormat)         | #2E8B57              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/seaGreen.gif) |
| Seal brown                                    | sealBrown($inOptFormat)        | #59260B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sealBrown.gif) |
| Seashell                                      | seashell($inOptFormat)         | #FFF5EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/seashell.gif) |
| Selective yellow                              | selectiveYellow($inOptFormat)  | #FFBA00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/selectiveYellow.gif) |
| Sepia                                         | sepia($inOptFormat)            | #704214              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sepia.gif) |
| Shadow                                        | shadow($inOptFormat)           | #8A795D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shadow.gif) |
| Shadow blue                                   | shadowBlue($inOptFormat)       | #778BA5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shadowBlue.gif) |
| Shampoo                                       | shampoo($inOptFormat)          | #FFCFF1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shampoo.gif) |
| Shamrock green                                | shamrockGreen($inOptFormat)    | #009E60              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shamrockGreen.gif) |
| Sheen Green                                   | sheenGreen($inOptFormat)       | #8FD400              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sheenGreen.gif) |
| Shimmering Blush                              | shimmeringBlush($inOptFormat)  | #D98695              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shimmeringBlush.gif) |
| Shiny Shamrock                                | shinyShamrock($inOptFormat)    | #5FA778              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shinyShamrock.gif) |
| Shocking pink                                 | shockingPink($inOptFormat)     | #FC0FC0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shockingPink.gif) |
| Shocking pink (Crayola)                       | shockingPinkCrayola($inOptFormat) | #FF6FFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/shockingPinkCrayola.gif) |
| Sienna                                        | sienna($inOptFormat)           | #882D17              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sienna.gif) |
| Silver                                        | silver($inOptFormat)           | #C0C0C0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/silver.gif) |
| Silver Lake blue                              | silverLakeBlue($inOptFormat)   | #5D89BA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/silverLakeBlue.gif) |
| Silver chalice                                | silverChalice($inOptFormat)    | #ACACAC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/silverChalice.gif) |
| Silver pink                                   | silverPink($inOptFormat)       | #C4AEAD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/silverPink.gif) |
| Silver sand                                   | silverSand($inOptFormat)       | #BFC1C2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/silverSand.gif) |
| Sinopia                                       | sinopia($inOptFormat)          | #CB410B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sinopia.gif) |
| Sizzling Red                                  | sizzlingRed($inOptFormat)      | #FF3855              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sizzlingRed.gif) |
| Sizzling Sunrise                              | sizzlingSunrise($inOptFormat)  | #FFDB00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sizzlingSunrise.gif) |
| Skobeloff                                     | skobeloff($inOptFormat)        | #007474              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/skobeloff.gif) |
| Sky blue                                      | skyBlue($inOptFormat)          | #87CEEB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/skyBlue.gif) |
| Sky magenta                                   | skyMagenta($inOptFormat)       | #CF71AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/skyMagenta.gif) |
| Slate blue                                    | slateBlue($inOptFormat)        | #6A5ACD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/slateBlue.gif) |
| Slate gray                                    | slateGray($inOptFormat)        | #708090              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/slateGray.gif) |
| Slimy Green                                   | slimyGreen($inOptFormat)       | #299617              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/slimyGreen.gif) |
| Smalt (Dark powder blue)                      | smaltDarkPowderBlue($inOptFormat) | #003399              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smaltDarkPowderBlue.gif) |
| Smashed Pumpkin                               | smashedPumpkin($inOptFormat)   | #FF6D3A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smashedPumpkin.gif) |
| Smitten                                       | smitten($inOptFormat)          | #C84186              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smitten.gif) |
| Smoke                                         | smoke($inOptFormat)            | #738276              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smoke.gif) |
| Smokey Topaz                                  | smokeyTopaz($inOptFormat)      | #832A0D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smokeyTopaz.gif) |
| Smoky Topaz                                   | smokyTopaz($inOptFormat)       | #933D41              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smokyTopaz.gif) |
| Smoky black                                   | smokyBlack($inOptFormat)       | #100C08              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/smokyBlack.gif) |
| Snow                                          | snow($inOptFormat)             | #FFFAFA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/snow.gif) |
| Soap                                          | soap($inOptFormat)             | #CEC8EF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/soap.gif) |
| Solid pink                                    | solidPink($inOptFormat)        | #893843              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/solidPink.gif) |
| Sonic silver                                  | sonicSilver($inOptFormat)      | #757575              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sonicSilver.gif) |
| Space cadet                                   | spaceCadet($inOptFormat)       | #1D2951              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spaceCadet.gif) |
| Spanish bistre                                | spanishBistre($inOptFormat)    | #807532              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishBistre.gif) |
| Spanish blue                                  | spanishBlue($inOptFormat)      | #0070B8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishBlue.gif) |
| Spanish carmine                               | spanishCarmine($inOptFormat)   | #D10047              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishCarmine.gif) |
| Spanish crimson                               | spanishCrimson($inOptFormat)   | #E51A4C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishCrimson.gif) |
| Spanish gray                                  | spanishGray($inOptFormat)      | #989898              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishGray.gif) |
| Spanish green                                 | spanishGreen($inOptFormat)     | #009150              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishGreen.gif) |
| Spanish orange                                | spanishOrange($inOptFormat)    | #E86100              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishOrange.gif) |
| Spanish pink                                  | spanishPink($inOptFormat)      | #F7BFBE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishPink.gif) |
| Spanish red                                   | spanishRed($inOptFormat)       | #E60026              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishRed.gif) |
| Spanish sky blue                              | spanishSkyBlue($inOptFormat)   | #00FFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishSkyBlue.gif) |
| Spanish violet                                | spanishViolet($inOptFormat)    | #4C2882              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishViolet.gif) |
| Spanish viridian                              | spanishViridian($inOptFormat)  | #007F5C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spanishViridian.gif) |
| Spartan Crimson                               | spartanCrimson($inOptFormat)   | #9E1316              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spartanCrimson.gif) |
| Spicy mix                                     | spicyMix($inOptFormat)         | #8B5f4D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spicyMix.gif) |
| Spiro Disco Ball                              | spiroDiscoBall($inOptFormat)   | #0FC0FC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/spiroDiscoBall.gif) |
| Spring Frost                                  | springFrost($inOptFormat)      | #87FF2A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/springFrost.gif) |
| Spring bud                                    | springBud($inOptFormat)        | #A7FC00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/springBud.gif) |
| Spring green                                  | springGreen($inOptFormat)      | #00FF7F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/springGreen.gif) |
| St. Patrick's blue                            | stPatricksBlue($inOptFormat)   | #23297A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/stPatricksBlue.gif) |
| Star command blue                             | starCommandBlue($inOptFormat)  | #007BB8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/starCommandBlue.gif) |
| Steel Teal                                    | steelTeal($inOptFormat)        | #5F8A8B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/steelTeal.gif) |
| Steel blue                                    | steelBlue($inOptFormat)        | #4682B4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/steelBlue.gif) |
| Steel pink                                    | steelPink($inOptFormat)        | #CC33CC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/steelPink.gif) |
| Stil de grain yellow                          | stilDeGrainYellow($inOptFormat) | #FADA5E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/stilDeGrainYellow.gif) |
| Stizza                                        | stizza($inOptFormat)           | #990000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/stizza.gif) |
| Stormcloud                                    | stormcloud($inOptFormat)       | #4F666A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/stormcloud.gif) |
| Straw                                         | straw($inOptFormat)            | #E4D96F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/straw.gif) |
| Strawberry                                    | strawberry($inOptFormat)       | #FC5A8D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/strawberry.gif) |
| Sugar Plum                                    | sugarPlum($inOptFormat)        | #914E75              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sugarPlum.gif) |
| Sunburnt Cyclops                              | sunburntCyclops($inOptFormat)  | #FF404C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunburntCyclops.gif) |
| Sunglow                                       | sunglow($inOptFormat)          | #FFCC33              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunglow.gif) |
| Sunny                                         | sunny($inOptFormat)            | #F2F27A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunny.gif) |
| Sunray                                        | sunray($inOptFormat)           | #E3AB57              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunray.gif) |
| Sunset                                        | sunset($inOptFormat)           | #FAD6A5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunset.gif) |
| Sunset orange                                 | sunsetOrange($inOptFormat)     | #FD5E53              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sunsetOrange.gif) |
| Super pink                                    | superPink($inOptFormat)        | #CF6BA9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/superPink.gif) |
| Sweet Brown                                   | sweetBrown($inOptFormat)       | #A83731              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/sweetBrown.gif) |
| Tan                                           | tan($inOptFormat)              | #D2B48C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tan.gif) |
| Tangelo                                       | tangelo($inOptFormat)          | #F94D00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tangelo.gif) |
| Tangerine                                     | tangerine($inOptFormat)        | #F28500              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tangerine.gif) |
| Tangerine yellow                              | tangerineYellow($inOptFormat)  | #FFCC00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tangerineYellow.gif) |
| Tango pink                                    | tangoPink($inOptFormat)        | #E4717A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tangoPink.gif) |
| Tart Orange                                   | tartOrange($inOptFormat)       | #FB4D46              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tartOrange.gif) |
| Taupe                                         | taupe($inOptFormat)            | #483C32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/taupe.gif) |
| Taupe gray                                    | taupeGray($inOptFormat)        | #8B8589              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/taupeGray.gif) |
| Tea green                                     | teaGreen($inOptFormat)         | #D0F0C0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/teaGreen.gif) |
| Tea rose                                      | teaRose($inOptFormat)          | #F4C2C2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/teaRose.gif) |
| Teal                                          | teal($inOptFormat)             | #008080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/teal.gif) |
| Teal blue                                     | tealBlue($inOptFormat)         | #367588              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tealBlue.gif) |
| Teal deer                                     | tealDeer($inOptFormat)         | #99E6B3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tealDeer.gif) |
| Teal green                                    | tealGreen($inOptFormat)        | #00827F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tealGreen.gif) |
| Telemagenta                                   | telemagenta($inOptFormat)      | #CF3476              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/telemagenta.gif) |
| Tenné                                        | tenné($inOptFormat)           | #CD5700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tenné.gif) |
| Terra cotta                                   | terraCotta($inOptFormat)       | #E2725B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/terraCotta.gif) |
| Thistle                                       | thistle($inOptFormat)          | #D8BFD8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/thistle.gif) |
| Thulian pink                                  | thulianPink($inOptFormat)      | #DE6FA1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/thulianPink.gif) |
| Tickle Me Pink                                | tickleMePink($inOptFormat)     | #FC89AC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tickleMePink.gif) |
| Tiffany Blue                                  | tiffanyBlue($inOptFormat)      | #0ABAB5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tiffanyBlue.gif) |
| Tiger's eye                                   | tigersEye($inOptFormat)        | #E08D3C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tigersEye.gif) |
| Timberwolf                                    | timberwolf($inOptFormat)       | #DBD7D2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/timberwolf.gif) |
| Titanium yellow                               | titaniumYellow($inOptFormat)   | #EEE600              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/titaniumYellow.gif) |
| Tomato                                        | tomato($inOptFormat)           | #FF6347              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tomato.gif) |
| Toolbox                                       | toolbox($inOptFormat)          | #746CC0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/toolbox.gif) |
| Topaz                                         | topaz($inOptFormat)            | #FFC87C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/topaz.gif) |
| Tractor red                                   | tractorRed($inOptFormat)       | #FD0E35              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tractorRed.gif) |
| Trolley Grey                                  | trolleyGrey($inOptFormat)      | #808080              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/trolleyGrey.gif) |
| Tropical rain forest                          | tropicalRainForest($inOptFormat) | #00755E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tropicalRainForest.gif) |
| Tropical violet                               | tropicalViolet($inOptFormat)   | #CDA4DE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tropicalViolet.gif) |
| True Blue                                     | trueBlue($inOptFormat)         | #0073CF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/trueBlue.gif) |
| Tufts Blue                                    | tuftsBlue($inOptFormat)        | #417DC1              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuftsBlue.gif) |
| Tulip                                         | tulip($inOptFormat)            | #FF878D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tulip.gif) |
| Tumbleweed                                    | tumbleweed($inOptFormat)       | #DEAA88              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tumbleweed.gif) |
| Turkish rose                                  | turkishRose($inOptFormat)      | #B57281              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turkishRose.gif) |
| Turquoise                                     | turquoise($inOptFormat)        | #40E0D0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turquoise.gif) |
| Turquoise Surf                                | turquoiseSurf($inOptFormat)    | #00C5CD              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turquoiseSurf.gif) |
| Turquoise blue                                | turquoiseBlue($inOptFormat)    | #00FFEF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turquoiseBlue.gif) |
| Turquoise green                               | turquoiseGreen($inOptFormat)   | #A0D6B4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turquoiseGreen.gif) |
| Turtle green                                  | turtleGreen($inOptFormat)      | #8A9A5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/turtleGreen.gif) |
| Tuscan                                        | tuscan($inOptFormat)           | #FAD6A5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuscan.gif) |
| Tuscan brown                                  | tuscanBrown($inOptFormat)      | #6F4E37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuscanBrown.gif) |
| Tuscan red                                    | tuscanRed($inOptFormat)        | #7C4848              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuscanRed.gif) |
| Tuscan tan                                    | tuscanTan($inOptFormat)        | #A67B5B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuscanTan.gif) |
| Tuscany                                       | tuscany($inOptFormat)          | #C09999              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tuscany.gif) |
| Twilight lavender                             | twilightLavender($inOptFormat) | #8A496B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/twilightLavender.gif) |
| Tyrian purple                                 | tyrianPurple($inOptFormat)     | #66023C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/tyrianPurple.gif) |
| UA blue                                       | uaBlue($inOptFormat)           | #0033AA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uaBlue.gif) |
| UA red                                        | uaRed($inOptFormat)            | #D9004C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uaRed.gif) |
| UCLA Blue                                     | uclaBlue($inOptFormat)         | #536895              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uclaBlue.gif) |
| UCLA Gold                                     | uclaGold($inOptFormat)         | #FFB300              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uclaGold.gif) |
| UFO Green                                     | ufoGreen($inOptFormat)         | #3CD070              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ufoGreen.gif) |
| UP Forest green                               | upForestGreen($inOptFormat)    | #014421              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/upForestGreen.gif) |
| UP Maroon                                     | upMaroon($inOptFormat)         | #7B1113              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/upMaroon.gif) |
| USAFA blue                                    | usafaBlue($inOptFormat)        | #004F98              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/usafaBlue.gif) |
| USC Cardinal                                  | uscCardinal($inOptFormat)      | #990000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uscCardinal.gif) |
| USC Gold                                      | uscGold($inOptFormat)          | #FFCC00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/uscGold.gif) |
| Ube                                           | ube($inOptFormat)              | #8878C3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ube.gif) |
| Ultra pink                                    | ultraPink($inOptFormat)        | #FF6FFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ultraPink.gif) |
| Ultra red                                     | ultraRed($inOptFormat)         | #FC6C85              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ultraRed.gif) |
| Ultramarine                                   | ultramarine($inOptFormat)      | #3F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ultramarine.gif) |
| Ultramarine blue                              | ultramarineBlue($inOptFormat)  | #4166F5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/ultramarineBlue.gif) |
| Umber                                         | umber($inOptFormat)            | #635147              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/umber.gif) |
| Unbleached silk                               | unbleachedSilk($inOptFormat)   | #FFDDCA              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/unbleachedSilk.gif) |
| United Nations blue                           | unitedNationsBlue($inOptFormat) | #5B92E5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/unitedNationsBlue.gif) |
| University of California Gold                 | universityOfCaliforniaGold($inOptFormat) | #B78727              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/universityOfCaliforniaGold.gif) |
| University of Tennessee Orange                | universityOfTennesseeOrange($inOptFormat) | #F77F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/universityOfTennesseeOrange.gif) |
| Unmellow yellow                               | unmellowYellow($inOptFormat)   | #FFFF66              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/unmellowYellow.gif) |
| Upsdell red                                   | upsdellRed($inOptFormat)       | #AE2029              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/upsdellRed.gif) |
| Urobilin                                      | urobilin($inOptFormat)         | #E1AD21              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/urobilin.gif) |
| Utah Crimson                                  | utahCrimson($inOptFormat)      | #D3003F              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/utahCrimson.gif) |
| Van Dyke Brown                                | vanDykeBrown($inOptFormat)     | #664228              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vanDykeBrown.gif) |
| Vanilla                                       | vanilla($inOptFormat)          | #F3E5AB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vanilla.gif) |
| Vanilla ice                                   | vanillaIce($inOptFormat)       | #F38FA9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vanillaIce.gif) |
| Vegas gold                                    | vegasGold($inOptFormat)        | #C5B358              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vegasGold.gif) |
| Venetian red                                  | venetianRed($inOptFormat)      | #C80815              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/venetianRed.gif) |
| Verdigris                                     | verdigris($inOptFormat)        | #43B3AE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/verdigris.gif) |
| Vermilion                                     | vermilion($inOptFormat)        | #D9381E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vermilion.gif) |
| Veronica                                      | veronica($inOptFormat)         | #A020F0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veronica.gif) |
| Very light azure                              | veryLightAzure($inOptFormat)   | #74BBFB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryLightAzure.gif) |
| Very light blue                               | veryLightBlue($inOptFormat)    | #6666FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryLightBlue.gif) |
| Very light malachite green                    | veryLightMalachiteGreen($inOptFormat) | #64E986              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryLightMalachiteGreen.gif) |
| Very light tangelo                            | veryLightTangelo($inOptFormat) | #FFB077              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryLightTangelo.gif) |
| Very pale orange                              | veryPaleOrange($inOptFormat)   | #FFDFBF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryPaleOrange.gif) |
| Very pale yellow                              | veryPaleYellow($inOptFormat)   | #FFFFBF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/veryPaleYellow.gif) |
| Violet                                        | violet($inOptFormat)           | #8F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violet.gif) |
| Violet (RYB)                                  | violetRyb($inOptFormat)        | #8601AF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violetRyb.gif) |
| Violet (color wheel)                          | violetColorWheel($inOptFormat) | #7F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violetColorWheel.gif) |
| Violet (web)                                  | violetWeb($inOptFormat)        | #EE82EE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violetWeb.gif) |
| Violet-blue                                   | violetBlue($inOptFormat)       | #324AB2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violetBlue.gif) |
| Violet-red                                    | violetRed($inOptFormat)        | #F75394              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/violetRed.gif) |
| Viridian                                      | viridian($inOptFormat)         | #40826D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/viridian.gif) |
| Viridian green                                | viridianGreen($inOptFormat)    | #009698              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/viridianGreen.gif) |
| Vista blue                                    | vistaBlue($inOptFormat)        | #7C9ED9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vistaBlue.gif) |
| Vivid amber                                   | vividAmber($inOptFormat)       | #CC9900              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividAmber.gif) |
| Vivid auburn                                  | vividAuburn($inOptFormat)      | #922724              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividAuburn.gif) |
| Vivid burgundy                                | vividBurgundy($inOptFormat)    | #9F1D35              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividBurgundy.gif) |
| Vivid cerise                                  | vividCerise($inOptFormat)      | #DA1D81              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividCerise.gif) |
| Vivid cerulean                                | vividCerulean($inOptFormat)    | #00AAEE              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividCerulean.gif) |
| Vivid crimson                                 | vividCrimson($inOptFormat)     | #CC0033              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividCrimson.gif) |
| Vivid gamboge                                 | vividGamboge($inOptFormat)     | #FF9900              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividGamboge.gif) |
| Vivid lime green                              | vividLimeGreen($inOptFormat)   | #A6D608              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividLimeGreen.gif) |
| Vivid malachite                               | vividMalachite($inOptFormat)   | #00CC33              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividMalachite.gif) |
| Vivid mulberry                                | vividMulberry($inOptFormat)    | #B80CE3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividMulberry.gif) |
| Vivid orange                                  | vividOrange($inOptFormat)      | #FF5F00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividOrange.gif) |
| Vivid orange peel                             | vividOrangePeel($inOptFormat)  | #FFA000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividOrangePeel.gif) |
| Vivid orchid                                  | vividOrchid($inOptFormat)      | #CC00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividOrchid.gif) |
| Vivid raspberry                               | vividRaspberry($inOptFormat)   | #FF006C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividRaspberry.gif) |
| Vivid red                                     | vividRed($inOptFormat)         | #F70D1A              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividRed.gif) |
| Vivid red-tangelo                             | vividRedTangelo($inOptFormat)  | #DF6124              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividRedTangelo.gif) |
| Vivid sky blue                                | vividSkyBlue($inOptFormat)     | #00CCFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividSkyBlue.gif) |
| Vivid tangelo                                 | vividTangelo($inOptFormat)     | #F07427              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividTangelo.gif) |
| Vivid tangerine                               | vividTangerine($inOptFormat)   | #FFA089              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividTangerine.gif) |
| Vivid vermilion                               | vividVermilion($inOptFormat)   | #E56024              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividVermilion.gif) |
| Vivid violet                                  | vividViolet($inOptFormat)      | #9F00FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividViolet.gif) |
| Vivid yellow                                  | vividYellow($inOptFormat)      | #FFE302              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/vividYellow.gif) |
| Volt                                          | volt($inOptFormat)             | #CEFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/volt.gif) |
| Wageningen Green                              | wageningenGreen($inOptFormat)  | #34B233              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wageningenGreen.gif) |
| Warm black                                    | warmBlack($inOptFormat)        | #004242              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/warmBlack.gif) |
| Waterspout                                    | waterspout($inOptFormat)       | #A4F4F9              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/waterspout.gif) |
| Weldon Blue                                   | weldonBlue($inOptFormat)       | #7C98AB              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/weldonBlue.gif) |
| Wenge                                         | wenge($inOptFormat)            | #645452              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wenge.gif) |
| Wheat                                         | wheat($inOptFormat)            | #F5DEB3              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wheat.gif) |
| White                                         | white($inOptFormat)            | #FFFFFF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/white.gif) |
| White smoke                                   | whiteSmoke($inOptFormat)       | #F5F5F5              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/whiteSmoke.gif) |
| Wild Strawberry                               | wildStrawberry($inOptFormat)   | #FF43A4              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wildStrawberry.gif) |
| Wild blue yonder                              | wildBlueYonder($inOptFormat)   | #A2ADD0              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wildBlueYonder.gif) |
| Wild orchid                                   | wildOrchid($inOptFormat)       | #D470A2              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wildOrchid.gif) |
| Wild watermelon                               | wildWatermelon($inOptFormat)   | #FC6C85              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wildWatermelon.gif) |
| Willpower orange                              | willpowerOrange($inOptFormat)  | #FD5800              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/willpowerOrange.gif) |
| Windsor tan                                   | windsorTan($inOptFormat)       | #A75502              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/windsorTan.gif) |
| Wine                                          | wine($inOptFormat)             | #722F37              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wine.gif) |
| Wine dregs                                    | wineDregs($inOptFormat)        | #673147              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wineDregs.gif) |
| Winter Sky                                    | winterSky($inOptFormat)        | #FF007C              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/winterSky.gif) |
| Winter Wizard                                 | winterWizard($inOptFormat)     | #A0E6FF              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/winterWizard.gif) |
| Wintergreen Dream                             | wintergreenDream($inOptFormat) | #56887D              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wintergreenDream.gif) |
| Wisteria                                      | wisteria($inOptFormat)         | #C9A0DC              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/wisteria.gif) |
| Wood brown                                    | woodBrown($inOptFormat)        | #C19A6B              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/woodBrown.gif) |
| Xanadu                                        | xanadu($inOptFormat)           | #738678              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/xanadu.gif) |
| Yale Blue                                     | yaleBlue($inOptFormat)         | #0F4D92              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yaleBlue.gif) |
| Yankees blue                                  | yankeesBlue($inOptFormat)      | #1C2841              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yankeesBlue.gif) |
| Yellow                                        | yellow($inOptFormat)           | #FFFF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellow.gif) |
| Yellow (Crayola)                              | yellowCrayola($inOptFormat)    | #FCE883              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowCrayola.gif) |
| Yellow (Munsell)                              | yellowMunsell($inOptFormat)    | #EFCC00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowMunsell.gif) |
| Yellow (NCS)                                  | yellowNcs($inOptFormat)        | #FFD300              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowNcs.gif) |
| Yellow (Pantone)                              | yellowPantone($inOptFormat)    | #FEDF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowPantone.gif) |
| Yellow (RYB)                                  | yellowRyb($inOptFormat)        | #FEFE33              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowRyb.gif) |
| Yellow (process)                              | yellowProcess($inOptFormat)    | #FFEF00              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowProcess.gif) |
| Yellow Orange                                 | yellowOrange($inOptFormat)     | #FFAE42              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowOrange.gif) |
| Yellow Sunshine                               | yellowSunshine($inOptFormat)   | #FFF700              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowSunshine.gif) |
| Yellow rose                                   | yellowRose($inOptFormat)       | #FFF000              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowRose.gif) |
| Yellow-green                                  | yellowGreen($inOptFormat)      | #9ACD32              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/yellowGreen.gif) |
| Zaffre                                        | zaffre($inOptFormat)           | #0014A8              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/zaffre.gif) |
| Zinnwaldite brown                             | zinnwalditeBrown($inOptFormat) | #2C1608              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/zinnwalditeBrown.gif) |
| Zomp                                          | zomp($inOptFormat)             | #39A78E              | ![Sample](https://github.com/dbeurive/color-picker/doc/images/zomp.gif) |
