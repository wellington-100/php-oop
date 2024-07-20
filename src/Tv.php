<?php
    require_once './src/Appliance.php';
    class Tv extends Appliance {
        private \Length\Length $diagonal;
        public function __construct(int $id, string $name, \Length\Length $diagonal, Money $price) {
            parent::__construct($id, $name, $price);
            $this->diagonal = $diagonal;
        }


    }
