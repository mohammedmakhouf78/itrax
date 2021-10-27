<?php

namespace OOP\Modules;

class Blog
{
    public $id;
    public $user_id;
    public $title;
    public $description;
    public $image;
    public $published_at;
    
    public function __construct($blogData)
    {
        $this->title = $blogData['title'];
        $this->description = $blogData['description'];
        $this->image = $blogData['image'];
        $this->published_at = $blogData['published_at'];
    }

}