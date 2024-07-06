<?
/* HW1:
define class Profile
                |
                +-- name
                +-- avatar
                +-- isOnline

    define a constructor
    define a toHTML()
    create a few profile objects and render them on the page
*/
class Profile {
    private $name;
    private $avatar;
    private $isOnline;
    public function __construct($name, $avatar, $isOnline) {
        $this->name = $name;
        $this->avatar = $avatar;
        $this->isOnline = $isOnline;
    }

    public function toHTML() {
        return "
            <div>
            <img src='{$this->avatar}' style='width:50px;'/>
            <p>{$this->name}</p>
            <p>status: {$this->isOnline}</p>
            </div>
        ";
    }
}
?>

<?
$profile1 = new Profile('Jhon Doe', 'images/avatar1.png', 'online');
print($profile1->toHTML());

$profile2 = new Profile('Peter Parker', 'images/avatar2.png', 'offline');
print($profile2->toHTML());
?>