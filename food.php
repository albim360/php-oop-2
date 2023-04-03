<?php 

require_once __DIR__ . './shop.php';
require_once __DIR__ . './products.php';

class Food extends Products {
    public $weight;
    public $price;
    public $name;
    public $description;
    public $image;
    public $category;
    public $ingredients;

    public function __construct($weight, $price, $name, $description, $image, $category, $ingredients) {
        $this->weight = $weight;
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->ingredients = $ingredients;
    }
    function getWeight() {
       return $this->weight;
    }
    
    function setWeight($weight) {
       $this->weight = $weight;
    }
    
    function getPrice() {
       return $this->price;
    }
    
    function setPrice($price) {
       $this->price = $price;
    }
    
    function getName() {
       return $this->name;
    }
    
    function setName($name) {
       $this->name = $name;
    }  
    
    function getDescription() {
       return $this->description;
    }
    
    function setDescription($description) {
       $this->description = $description;
    }
    
    function getImage() {
       return $this->image;
    }
    
    function setImage($image) {
       $this->image = $image;
    }
    
    function getCategory() {
       return $this->category;
    }
    
    function setCategory($category) {
       $this->category = $category;
    }
    
    function getIngredients() {
       return $this->ingredients;
    }
    
    function setIngredients($ingredients) {
       $this->ingredients = $ingredients;
    }
}


?>
