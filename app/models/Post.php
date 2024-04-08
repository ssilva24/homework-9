<?php

namespace app\models;

use app\core\Database;

class Post
{
    use Database;

    //todo make methods here
    public function getPosts()
    {
        $query = "select * from posts";
        return $this->fetchAll($query);
    }

    public function getPostbyid($id)
    {
        $query = "select * from posts where id = :id";
        return $this->queryWithParams($query, ["id"=> $id]);
    }

    public function deletePost($id)
    {
        $query = "delete from posts where id= :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }

    public function addPost($post, $description)
    {
        $query = "insert into posts (post, description) values (:post, :description)";
        return $this->queryWithParams($query, ["post"=> $post,"description"=> $description]);
    }

    public function updatePost($id, $post, $description)
    {
        $query = "update posts set post = :post, description = :description, where id = :id";
        return $this-> queryWithParams($query, ['id' => $id,'post'=> $post,'description'=> $description]);
    }
}
