<?php

namespace App\Models;

class StoreItem {
    public $name;
    public $cost;
    public $img;

    public function __construct($name, $cost, $img) {
    	$this->name = $name;
    	$this->cost = $cost;
    	$this->img = $img;
    }
}

?>
