<!-- kopie van Index -->
<!-- Hugo van der Geest -->

<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

// De catalogus met alle producten inladen
$catalogue = new ProductCatalogue('products.json');

$product_code = $_GET['code'];
// product_bekijken toegevoegd
$product_bekijken = $catalogue->getProduct($product_code);

?>
<!doctype html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="webshop">
        <h2 class="webshop__title"><?php echo $product_bekijken->getTitle() ?></h2>
        <div class="webshop__content">
            <p><?php echo $product_bekijken->getDescription() ?></p>
            <img src="<?php echo $product_bekijken->getImage() ?>" class="rond foto">

            <p class="groter">&euro;<?php echo $product_bekijken->getPrice() ?></p>
            <a href="cart.php?action=add_product&code=<?php echo $product_bekijken->getCode() ?>" class="cart-button rond">KOPEN!</a>
        </div>
        <footer>
            <a class="meer" href="index.php">Meer shoppen</a>
        </footer>
    </section>
</body>

</html>