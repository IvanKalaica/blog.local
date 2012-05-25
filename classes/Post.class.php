<?php

//Post.class.php

require_once 'DB.class.php';

class Post {

    public $id;
    public $title;
    public $content;
    public $created_at;
    public $modified_at;

    public function __toString() {
        return $this->title;
    }

    //Constructor is called whenever a new object is created.
    //Takes an associative array with the DB row as an argument.
    public function __construct($data) {
        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->title = (isset($data['title'])) ? $data['title'] : "";
        $this->content = (isset($data['content'])) ? $data['content'] : "";
        $this->created_at = (isset($data['created_at'])) ? $data['created_at'] : "";
        $this->modified_at = (isset($data['modified_at'])) ? $data['modified_at'] : "";
    }

    public function save($isNewPost = false) {
        //create a new database object.
        $db = new DB();

        //if the post is being edited.
        if (!$isNewPost) {
            //set the data array
            $data = array(
                "title" => "'$this->title'",
                "content" => "'$this->content'"
            );

            //update the row in the database
            $db->update($data, 'posts', 'id = ' . $this->id);
        } else {
            //if the post is being created.
            $data = array(
                "title" => "'$this->title'",
                "content" => "'$this->content'",
                "$created_at" => "'" . date("Y-m-d H:i:s", time()) . "'"
            );

            $this->id = $db->insert($data, 'posts');
            $this->created_at = time();
        }
        return true;
    }

}

?>