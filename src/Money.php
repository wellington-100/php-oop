<?php
    class Money {
        private int $amount;    // x100 
        private string $currency;
        const CURRENCIES = ['EUR', 'USD', 'MDL'];

        public function __construct(int $amount, string $currency){
            $this->__set('amount', $amount);
            $this->__set('currency', $currency);
        }

        // HW: limit to the max and min of integer      +

        // HW: allow only EUR, USD, MDL     +

        public function __set(string $property, mixed $value) {
            if ($property == 'amount') {
                if ($value < PHP_INT_MIN || $value > PHP_INT_MAX) {
                    die(sprintf("Error: amount must be in range (%d..%d)\n", PHP_INT_MIN, PHP_INT_MAX));
                }
            }
            if ($property == 'currency') {
                if (!in_array($value, static::CURRENCIES)) {
                    die(sprintf("Error: currency must be one of %s\n", implode(', ', static::CURRENCIES)));
                }
            }
            if (!property_exists($this, $property)) {
                die("Error: Property '$property' does not exist.\n");
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