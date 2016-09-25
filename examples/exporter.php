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

function sep($inLength) {
    $res = array();
    for ($i=0; $i<$inLength; $i++) {
        $res[] = '-';
    }
    return implode('', $res);
}

$reflection = new \ReflectionClass(new Picker);
printf("| %-45s | %-30s | %-20s |\n", 'Name of the color', 'Method', 'HTML color code');
printf("| %-45s | %-30s | %-20s |\n", sep(45), sep(30), sep(20));
foreach ($reflection->getMethods(\ReflectionMethod::IS_STATIC) as $_index => $_m) {
    if (in_array($_m->name, array('setDefaultOutputFormat', 'getColor'))) {
        continue;
    }
    $method = $_m->name;
    $name   = Picker::$list[$method]['name'];
    $html   = Picker::$list[$method]['html'];
    printf("| %-45s | %-30s | %-20s |\n", $name, $method, $html);
}


