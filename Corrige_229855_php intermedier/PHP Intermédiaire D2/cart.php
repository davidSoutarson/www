<?php require('includes/session.php'); ?>
<?php require('includes/database.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Panier</title>
    </head>
    <body>
        <?php require('includes/navigation.php'); ?>
        <?php
            $userId = $_SESSION['userId'];
            if (isset($_POST['productId'])) {
                if (empty($_POST['productId'])) {
                    $message = '<p class="error">Aucun produit connu</p>';
                } else {
                    $result = $mysqli->query('SELECT * FROM product WHERE id = "'.$_POST['productId'].'" ');
                    $row = $result->fetch_array();
                    if ($row) {
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $cart = unserialize($_COOKIE['cart']);
                        }
                        $cart[] = $row['id'];
                        setcookie('cart', serialize($cart), time()+3600);
                        header('location:cart.php');
                    }
                }
            }
        ?>
        <h1>Votre panier</h1>
        <table>
            <tr>
                <th>Désignation</th>
                <th>Qantité</th>
                <th>Prix</th>
            </tr>
            <?php
                $products = [];
                if (isset($_COOKIE['cart'])) {
                    $productIds = unserialize($_COOKIE['cart']);
                    foreach ($productIds as $productId) {
                        $result = $mysqli->query("SELECT name, price FROM product WHERE id = $productId");
                        $row = $result->fetch_array();
                        $products[$productId]['name'] = $row['name'];
                        $products[$productId]['price'] = $row['price'];
                        if (isset($products[$productId]['quantity'])) {
                            $products[$productId]['quantity']++;
                        } else {
                            $products[$productId]['quantity'] = 1;
                        }
                    }
                }
            ?>
            <?php $total = []; ?>
            <?php foreach($products as $id => $product): ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $total[] = $product['price'] * $product['quantity']; ?></td>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td colspan="4"><?php echo array_sum($total); ?></td>
            </tr>
        </table>
    </body>
</html>
