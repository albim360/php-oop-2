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
}

public function getWeight() {
    return $this->weight;
}

public function setWeight($weight) {
    $this->weight = $weight;
}

public function getPrice() {
    return $this->price;
}

public function setPrice($price) {
    $this->price = $price;
}

public function getName() {
    return $this->name;
}

public function setName($name) {
    $this->name = $name;
}  

public function getDescription() {
    return $this->description;
}

public function setDescription($description) {
    $this->description = $description;
}

public function getImage() {
    return $this->image;
}

public function setImage($image) {
    $this->image = $image;
}

public function getCategory() {
    return $this->category;
}

public function setCategory($category) {
    $this->category = $category;
}

public function getIngredients() {
    return $this->ingredients;
}

public function setIngredients($ingredients) {
    $this->ingredients = $ingredients;
}

?>
