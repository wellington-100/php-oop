<?
    interface ForDelivery {
        public function getDeliveryDetails();
    }

    abstract class Item {
        public $name;
        public $image;
        public $price;

        public function __construct($name, $image, $price){
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;

        }
    }
    
    class Food extends Item implements ForDelivery {

        public $weight;
        public function __construct($name, $image, $price, $weight){
            parent:: __construct($name, $image, $price);
            $this->weight = $weight;
        }

        public function getDeliveryDetails(){
            return "Food item: {$this->name}, Weight: {$this->weight}";
        }

        public function __tostring(){
            return "<p>FOOD: ({$this->weight}g) {$this->name} {$this->price} </p>";
        }
    }

    class Drink extends Item implements ForDelivery {

        public $volume;
        public function __construct($name, $image, $price, $volume){
            parent::__construct($name, $image, $price);
            $this->volume = $volume;
        }

        public function getDeliveryDetails(){
            return "Drink item: {$this->name}, Volume: {$this->volume}";
        }

        public function __tostring(){
            return "<p>DRINK: ({$this->volume}ml) {$this->name} {$this->price}</p>";
        }
    }

    class Delivery implements ForDelivery {
        public $items;
        public $quantities;
        public $address;
        public $deliveryTime;

        public function __construct($items, $quantities, $address, $deliveryTime){
            $this->items = $items;
            $this->quantities = $quantities;
            $this->address = $address;
            $this->deliveryTime = $deliveryTime;
        }

        public function calculateTotalPrice(){
            $total = 0;
            foreach ($this->items as $name => $item) {
                $total += $item->price * $this->quantities[$name];
            }
            return $total;
        }

        public function getDeliveryDetails(){
            $details = "<p>Delivery to {$this->address}, Estimated time: {$this->deliveryTime} mins</p>";
            $itemDetails = "";

            foreach ($this->items as $name => $item) {
                if ($item instanceof ForDelivery) {
                    $itemDetails .= $item->getDeliveryDetails() . "<p>Quantity: {$this->quantities[$name]}</p>";
                }
            }

            $details .= "<p>Total Price: {$this->calculateTotalPrice()}</p>";
            return $details . $itemDetails;
        }

    }
?>

<?
    $food1 = new Food("Salad", "images/salad.jpg", 100, 1000);
    $drink = new Drink("Apple Juice", "images/apple-juice.jpg", 50, 500);

    $items = [
        $food1->name => $food1,
        $drink->name => $drink
    ];

    $quantities = [
        $food1->name => 2, 
        $drink->name => 3  
    ];

    $delivery = new Delivery($items, $quantities, "Stefan cel Mare 70, Chisinău", 30);

    print ($food1);
    print ($drink);
    print($delivery->getDeliveryDetails())

    // HW: add another product name DeliveryService + improvise, test
?>
