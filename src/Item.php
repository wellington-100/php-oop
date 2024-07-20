<?php
    class Item {
        private Appliance $appliance;
        private int $quantity;

        public function __construct(Appliance $appliance, int $quantity){

            // copy the product, to avoid leaking REFERENCE!
            $applianceTemp = clone $appliance;

            $this->appliance = $applianceTemp;
            $this->quantity = $quantity;
        }

        public function __set(string $property, mixed $value): void {
            if ($property == 'quantity') {
                if ($value < 1) {
                    die("The quantity must be a positive number");
                }
            }
            if ($property == 'appliance') {
                if (!($value instanceof Appliance)) {
                    die("Error: Item must be an instance of Appliance.\n");
                }
            }
            $this->$property = $value;
        }

        public function __get(string $property): mixed {
            if (!property_exists($this, $property)) {
                die("Error: Property '$property' does not exist.\n");
            }
            return $this->$property;
        }
        
    }