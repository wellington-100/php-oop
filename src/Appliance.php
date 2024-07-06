<?php
    abstract class Appliance {
        const ID_MIN = 0;
        const ID_MAX = 1_000_000;
        const NAME_LENGTH = 3;

        protected int $id;
        protected string $name;
        protected Money $price;
        
        public function __construct(
            int $id,
            string $name,
            Money $price,
        ){
            $this->__set('id', $id);
            $this->__set('name', $name);
            $this->__set('price', $price);
        }

        // HW: refactor the code using __set(), __get()     +

        // HW3: add set/get for name: must contain at least 3 characters        +
        public function __set(string $property, mixed $value): void {
            if ($property == 'id') {
                if($value <= static::ID_MIN || $value >= static::ID_MAX){
                    // HW2: try using sprintf()     +
                    // die("Error: id must be in range (".static::ID_MIN."..".static::ID_MAX.")\n");
                    die(sprintf("Error: id must be in range (%d..%d)\n", static::ID_MIN, static::ID_MAX));
                }
            }
            if ($property == 'name') {
                if (strlen($value) < static::NAME_LENGTH) {
                    die(sprintf("Error: name must contain at least %d characters\n", static::NAME_LENGHT));
                }
            }
            if ($property == 'price') {
                if (!($value instanceof Money)) {
                    die("Error: price must be an instance of Money.\n");
                }
            }
            
            if (!property_exists($this, $property)) {
                die("Error: Property '$property' does not exist.\n");
            }
            $this->$property = $value;
        }

        public function __get(string $property): mixed {
            if(!property_exists($this, $property)) {
                die("Error: Property '$property' does not exist.\n");
            }
            return $this->$property;
        }
    }
