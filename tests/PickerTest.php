<?php

use dbeurive\Color\Picker;

class PickerTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodHasColor() {
        $reflection = new \ReflectionClass(new Picker);
        foreach ($reflection->getMethods(\ReflectionMethod::IS_STATIC) as $_index => $_m) {
            if (in_array($_m->name, array('setDefaultOutputFormat', 'getColor'))) {
                continue;
            }
            $this->assertTrue(array_key_exists($_m->name, Picker::$list));
        }
    }
}