<?php
/**
 * Created by PhpStorm.
 * User: Yael Tudela
 * Date: 29/12/2017
 * Time: 20:01
 */

session_start();
switch ($_GET['mode']){
    case 'show':
        echo '<table class="product-table">
    <tr>
        <th>Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th> </th>
</tr>';
        if(isset($_SESSION['products']) and !empty($_SESSION['products'])){

            $productstring = '';
            $execparam = [];
            foreach ($_SESSION['products'] as $prID => $q){
                $productstring = $productstring.'`Id`= ? OR ';
                array_push($execparam,$prID);

            }
            $productstring = substr($productstring,0,strlen($productstring)-4);

            $sql = $connection->prepare("SELECT `Name`,`Price`, `Id` FROM Product WHERE {$productstring} ORDER BY `Id`");
            $sql->execute($execparam);
            $products = $sql->fetchAll(PDO::FETCH_ASSOC);


            $i = 0;
            foreach ($products as $product) {
                foreach ($_SESSION['products'] as $prID => $q){
                    if($prID == $product['Id']){
                        $products[$i]['q'] = $q;
                    }
                }
                $i++;
            }

            $i = 0;
            ;

            foreach ($_SESSION['products'] as $prID => $q){
                $qp = $products[$i]['q'] * $products[$i]['Price'];
                $priceq[$prID] = $products[$i]['Price'] * $_SESSION['products'][$prID];
                echo "<tr>
    <td>{$products[$i]['Name']}</td>
    <td>{$products[$i]['Price']}</td>
    <td class='product-line-data'>{$products[$i]['q']}</td>
    <td class='product-line-data'>{$qp}</td></</br></<br>
    <td><a class='remove-item' onclick='removeProductCart({$products[$i]['Id']})'>Remove</a></td>
</tr>";
                $i++;
            }


        }else{
            echo '<tr><th  colspan="5">There\'s no products in cart</th></tr>';
        }


        break;
    case 'add':
        break;
    case 'update':
        break;
}