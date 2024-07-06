<?
class Style {
    public $background;
    public $color;
    public $padding;
    public $margin;

    public function __construct($background, $color, $padding, $margin){
        $this->background = $background;
        $this->color = $color;
        $this->padding = $padding;
        $this->margin = $margin;
    }

    public function toCSS(){
        return "
            background: {$this->background};
            color: {$this->color};
            padding: {$this->padding};
            margin: {$this->margin};
        ";
    }
}
?>
<? 
    $style1 = new Style("black", "white", "10px", "10px");
    $style2 = new Style("orange", "black", "10px", "10px");
?>
<div style="<?= $style1->toCSS()?>">ELEMENT 1</div>
<div style="<?= $style2->toCSS()?>">ELEMENT 2</div>
