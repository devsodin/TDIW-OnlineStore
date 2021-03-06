<?php
/**
 * Created by PhpStorm.
 * User: Yael Tudela
 * Date: 02/01/2018
 * Time: 13:11
 */

define('__RPATH__', 'views/images/');

function print_products($products)
{
    echo '<div id="products" class="products">';
    foreach ($products as $product) {
        $image = __RPATH__ . $product['Image'];
        echo '<div class="product-block">';
        echo '<div class="product-image" onclick=showDetails(' . $product['Id'] . ')>';
        echo "<img src='{$image}'>";
        echo '</div>';
        echo '<div class="product-data">';
        echo '<h3 id="product-name" onclick=showDetails(' . $product['Id'] . ')>' . $product['Name'] . '</h3>';
        echo '<p id="product-sdescription">' . $product['Short_description'] . '</p>';
        echo '<p id="product-price">' . $product['Price'] . ' €</p>';
        echo '</div></div>';
    }
    echo '</div>';
}

?>