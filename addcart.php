<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>add cart</title>
    </head>
    <body>
        <?php
        $p_id = $_POST["pro_id"];
        $p_cnt = $_POST["pro_cnt"];
        $_SESSION["cart"][$p_id] += $p_cnt;
        ?>
        <br> <a href="shoppingcart.php">Go To Cart.</a>
    </body>
</html>
