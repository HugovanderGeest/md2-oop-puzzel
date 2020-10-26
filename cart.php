<!-- Hugo van der Geest -->

<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

session_start();

/**
 * Als er nog geen winkelwagen is opgeslagen in de sessie
 * dan wordt hij hier aangemaakt en in de sessie opgeslagen
 */
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = new ShoppingCart();
}

$productCatalogue = new ProductCatalogue('products.json');
$shoppingCart = $_SESSION['cart'];

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add_product':
            $product_code = $_GET['code'];
            $product = $productCatalogue->getProduct($product_code);
            $shoppingCart->addProduct($product);
            header('Location: cart.php');
            break;
        case 'remove_item':
            $item_index = $_GET['item_index'];
            $shoppingCart->removeItem($item_index);
            header('Location: cart.php');
            break;
        case 'remove_cart':
            $shoppingCart->emptyCart();
            header('Location: cart.php');
            break;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="webshop">
        <h2 class="webshop__title">Winkelmantje </h2>
        <div class="webshop__content">
            <div class="shopping-cart">
                <h2 class="groter">Winkelwagen</h2>

                <?php if ($shoppingCart->hasProducts()) : ?>

                    <p class="groter">Dit zit er nu in je winkelwagen:</p>

                    <?php foreach ($shoppingCart->getProducts() as $index => $product) : ?>
                        <div class="shopping-cart__item">
                            <!-- product->getImage toegevoegd -->
                            <img class="foto" src=" <?php echo $product->getImage() ?>">
                            <h4 class="groter"><?php echo $product->getTitle() ?> </h4>
                            <span class="groter price"><span>€<span><?php echo $product->getPrice() ?></span>
                                    <p class="cart-button rond"><a href="cart.php?action=remove_cart">Verwijder</a></p>

                        </div>
                    <?php endforeach; ?>

                    <strong class="groter">Totaal: <?php echo $shoppingCart->getTotal() ?></strong>

                <?php else : ?>

                    <p class="groter">Je hebt nog niets in je winkelmandje</p>

                <?php endif; ?>
            </div>
        </div>
        <footer>
            <a class="groter" href=" index.php">Naar de producten</a>
        </footer>
    </section>
</body>

</html>