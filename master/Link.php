<?
class Link {
    private $text;
    private $url;

    public function __construct($text, $url){
        $this->__set("text", $text);
        $this->__set("url", $url);
    }

    public function __set($name, $value){
        if ($name == "text") {
            if (trim($value) != "")
                $this->text = $value;
            else
                die("ERROR: cannot leave {$name} empty or only spaces!");
        } else if ($name == "url") {
            if ($value != "")
                $this->url = $value;
            else
                die("ERROR: unknown property {$name}");
        }
    }

    public function __get($name) {
        if ($name == "text") return $this->text;
        else if ($name == "url") return $this->url;
        else die ("ERROR: unknown property {$name}");
    }

    public function __toString() {
        return "<a href='{$this->url}'>{$this->text}</a>";
    }

    //HW3: implement __isset() so it returns true only if link has a non-empty text and url
    public function __isset($name){
        return isset($this->$name);
    }
}
?>

<?
// HW1: what if $text is multiple spaces? check...
$link1 = new Link("php manual", "https://php.net");

if (isset($link->url)) {
    print("The URL of the link1 is set.\n");
} else {
    print("The URL of the link1 isnt set.\n");
}
?>

<p>To read more about php, click <?= $link1 ?></p>
