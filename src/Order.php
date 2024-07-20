<?php
    declare(strict_types=1);
    class Order {
        private array $items;
        private Money $total;

        public function __construct(){
            $this->items = [];
            $this->total = new Money(0, 'EUR');
        }

        public function addItem(Item $item): void {
            $this->items[] = $item;
            $this->adjustTotal($item->__get('appliance')->__get('price'), $item->__get('quantity'));

        }

        //HW*: create the removeItem(index)
        public function removeItem(int $index): void {
            $new_items = [];
            foreach ($this->items as $key => $item) {
                if ($key == $index) {
                    $price = $item->__get('appliance')->__get('price');
                    $quantity = $item->__get('quantity');
                    $this->adjustTotal($price, -$quantity);
                } else {
                    $new_items[] = $item;
                }
            }
            $this->items = $new_items;
        }

        //HW*: create the changeItemQuantity(index, quantity)
        public function changeItemQuantity(int $index, int $quantity): void {
            foreach($this->items as $key => $item){
                if ($key == $index) {
                    $currentQuantity = $item->__get('quantity');
                    $difference = $difference = intval($quantity - $currentQuantity);
                    $item->__set('quantity', $quantity);
                    $this->adjustTotal($item->__get('appliance')->__get('price'), $difference);
                    break;
                }
            }
        }

        private function adjustTotal(Money $price, int $quantity): void {
            $this->total = new Money(
                $this->total->__get('amount') + $price->__get('amount') * $quantity, 
                $price->__get('currency')
            );
            
        }
    }