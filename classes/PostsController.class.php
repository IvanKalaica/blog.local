<?php

//PostsController.class.php

require_once 'Post.class.php';
require_once 'DB.class.php';

class PostsController {

    //get a post
    //returns a Post object. Takes the users id as an input
    public function get($id) {
        if (!$id) {
            return null;
        }
        $db = new DB();
        $result = $db->select('posts', "id = $id");

        return new Post($result);
    }

    public function getAllPosts($param) {

        $db = new DB();
        $results = $db->select('posts', null);
        $array = array();

        foreach ($results as $result)
        {
            $post = new Post($result);
            array_push($array, $post);
        }
        
        return $array;
    }

}

?>
