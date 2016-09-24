<?php

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


