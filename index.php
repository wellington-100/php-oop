<?
    require_once 'src/Appliance.php';
    require_once 'src/Money.php';
    require_once 'src/Tv.php';
    require_once 'src/Length.php';
    require_once 'src/DishWasher.php';
    require_once 'src/Volume.php';
    
    require_once 'src/Order.php';
    require_once 'src/Item.php';
    
    
    $tv = new Tv(
        1000, "LG Extreme 55", 
        new \Length\Length(75, \Length\Units:: INCH), 
        new Money(1000_00, "EUR")
    );

    $washer = new DisWasher(
        1001, 
        'Samsung DW-1', 
        15,
        new \Volume\Volume(100, \Volume\Units::LITER),
        new Money(500_00, 'EUR')
    );
    
    $order = new Order();
    $order->addItem(new Item($tv, 2));
    $order->addItem(new Item($washer, 1));
    
    // $tv->__set('price', new Money(1003_00, 'EUR'));

    // $order->removeItem(0);
    $order->changeItemQuantity(1, 2);


    // go to payment
    var_dump($order);


























// var_dump($tv);
// var_dump($washer);