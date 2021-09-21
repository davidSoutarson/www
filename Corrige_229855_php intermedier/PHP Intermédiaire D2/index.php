<?php require('includes/session.php'); ?>
<?php require('includes/database.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
    </head>
    <body>
        <?php require('includes/navigation.php'); ?>
        <h1>Catalogue</h1>
        <?php $result = $mysqli->query('SELECT id, name, price FROM product'); ?>
        <?php while ($row = $result->fetch_array()): ?>
            <form action="cart.php" method="post">
                <?php echo $row['name']; ?>
                <input type="hidden" value="<?php echo $row['id']; ?>" name="productId"/>
                <input type="submit" value="Ajouter au panier"/>
            </form>
        <?php endwhile; ?>
    </body>
</html>
