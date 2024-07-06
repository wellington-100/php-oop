<?
    require_once 'src/Appliance.php';
    require_once 'src/Money.php';
    require_once 'src/Tv.php';
    require_once 'src/Length.php';


$tv = new Tv(12, "LG Extreme", 75, new Money(1000_00, "EUR"));
var_dump($tv);

$diagonal = new Length(75, Units:: INCH);

var_dump($diagonal);

//-------------
