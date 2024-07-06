<?php
require_once './src/Appliance.php';
    class Tv extends Appliance {
        private $diagonal;
        public function __construct(int $id, string $name, int $diagonal, Money $price) {
            parent::__construct($id, $name, $price);
            $this->diagonal = $diagonal;
        }


    }
