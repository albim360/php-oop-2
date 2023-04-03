<?php 

require_once './food.php';
require_once './products.php';
require_once './toy.php';
require_once './shop.php';

$shop = new Shop();

class Shop {
    public $products = [];

    public function __construct() {
      $dogFood = new Food(1, 10, 'Cibo secco per cani', 'Cibo secco per cani adulti', 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/medium/adult/con/manzo/riso/0/400/73476_nova_foods_trainer_natural_medium_beef_rice_ginseng_12kg_hs_02_0.jpg', 'Cibo per cani', 'Farina di carne, riso, mais');
      $catFood = new Food(2, 5, 'Cibo umido per gatti', 'Cibo umido per gatti adulti', 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/medium/adult/con/manzo/riso/0/400/73476_nova_foods_trainer_natural_medium_beef_rice_ginseng_12kg_hs_02_0.jpg', 'Cibo per gatti', 'Pollo, verdure, minerali');
      $this->products[] = $dogFood;
      $this->products[] = $catFood;
      $dogToy = new Toy(3, 20, 'Pallina per cani', 'Pallina in gomma per cani di taglia media e grande', 'https://shop-cdn-m.mediazs.com/bilder/set/topini/palline/8/400/percent__5__8.jpg', 'Giocattoli per cani', '3+');
      $catToy = new Toy(4, 15, 'Giocattolo per gatti', 'Giocattolo con piume per gatti di tutte le età', 'https://shop-cdn-m.mediazs.com/bilder/set/topini/palline/8/400/percent__5__8.jpg', 'Giocattoli per gatti', 'Tutte le età');
      $this->products[] = $dogToy;
      $this->products[] = $catToy;
  }

    public function getProducts() {
        return $this->products;
    }

    trait Discountable {
      public function getDiscountedPrice($discountPercentage) {
          return round($this->price - ($this->price * ($discountPercentage / 100)), 2);
      }
  }
  class OutOfStockException extends Exception {
    public function __construct($message = "Il prodotto è esaurito", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooleanPlanet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</head>
<body>

<style>

.card {
    border: 1px solid #000;
    border-radius: 10px;
    box-shadow: 0 0 7px #000;
    height: 450px;
  }
</style>
    <div class="container">
        <h1 class="mt-4">Prodotti disponibili</h1>
        <div class="row">
            <?php foreach($shop->getProducts() as $product) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text"><?php echo $product->getDescription(); ?></p>
                            <p class="card-text"><strong>Prezzo:</strong> <?php echo $product->getPrice(); ?>€</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $product->getCategory(); ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>