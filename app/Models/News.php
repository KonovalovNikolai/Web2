<?php

namespace App\Models;

class News {
    public $title;
    public $date;
    public $tag;
    public $body;
    public $img;
    public $url;

    public function __construct($title, $date, $tag, $body, $img, $url) {
    	$this->title = $title;
    	$this->date = $date;
    	$this->tag = $tag;
    	$this->body = $body;
    	$this->img = $img;
    	$this->url = $url;
    }
}

?>
