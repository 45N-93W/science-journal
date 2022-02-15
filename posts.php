<?php
class Post
{
    public $id = null;
    public $title = null;
    public $description = null;

    function __construct($id = null, $title = null, $description = null)
    {
        $id = $id ?: $this;
        $title = $title ?: $this->title;
        $description = $this->set_description($description);
    }
    function set_title($title)
    { {
            if (strlen($title) <= 0) {
                throw new Exception("cannot submit blank title");
            }
            if (strlen($title) > 0) {
                $this->title = $title;
            }
        }
    }
    function get_title()
    {
        return $this->title;
    }
    function set_description($description)
    {
        if (strlen($description) <= 0) {
            throw new Exception("cannot submit blank description");
        }
        if (strlen($description) > 0) {
            $this->description = $description;
        }
    }
    function getDescription()
    {
        return $this->description;
    }
}

?>
<?php
$post = new Post(0, "this is test", "hello");
echo "<h1>$post->description</h1> <p>$post->title</p>";
?>