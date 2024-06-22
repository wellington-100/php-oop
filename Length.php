<?
// author: misterX
class Length{
    public $value;
    private $unit;

    public function __construct($value, $unit){
        $this->setUnit($unit);
        $this->setValue($value);
    }

    public function getUnit(){
        return $this->unit;
    }

    public function setUnit($unit){
        if (in_array($unit, ["%", "px", "vh", "vw", "rem", "em"])) {
            $this->unit = $unit;
        } else {
            die("ERROR: Wrong unit value!!!");
        }
    }

    public function setValue($value){
        // HW: add encapsulation for "value" allow only >=0
        if ($value > 0) {
            $this->value = $value;
        } else {
            die ("ERROR: Wrong unit value!!!");
        }
    }

}
?>

<?
// developer: misterW
$width = new Length(100, "%");
$height = new Length(70, "%");

print($width->setValue(-10));
print($width->setUnit("px"));
// var_dump($width);
// var_dump($height);

print($width->value);
print($width->getUnit());

?>
