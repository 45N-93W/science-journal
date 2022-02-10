<?php
class Post {
public $id = null;
public $title = null;
public $description = null;

function __construct($id = null, $title = null, $description = null) {
    $id = $id ?: $this;
    $title = $title ?: $this->title;
    $description = $description ?: $this->description;
    
}

}