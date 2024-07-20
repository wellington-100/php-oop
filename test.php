<?php
    declare(strict_types=1);

    $number = [10, 20, 30];

    $number_copy = &$number;

    $number_copy[] = 400;

    var_dump($number);
    var_dump($number_copy);
////////////////////////////////////////////
    class Box {
        public $value;
        public function  __construct($value) {
            $this->value = $value;
        }

        public function __clone() {
            // Dacă ai fi avut alte obiecte ca proprietăți, ar trebui să le clonezi și pe ele aici
        }
    }

$box1 = new Box(100);
$box_ref = clone $box1;

$box_ref->value = 200;

var_dump($box1);
var_dump($box_ref);