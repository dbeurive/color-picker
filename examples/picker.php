<?php

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Denis BEURIVE
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

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