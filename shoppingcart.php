<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>shopping cart</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
                <td><h2 style="color: white"><font size="5"> Shopping Cart.. </font></h2></td>
            </tr>
        </table>
        <table style="width: 100%">
            <?php
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "Online_Store";
            $total = 0;
            //create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            if (isset($_POST["submit"])) {
                $p_id = $_POST["pro_id"];
                --$_SESSION["cart"][$p_id];
            }
            echo '<tr>';
            echo '<th>Quantity</th>';
            echo '<th>Book Name</th>';
            echo '<th>Price</th>';
            echo '<th>Total Price</th>';
            echo '</tr>';
            $sql = "select * from product_info";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    $count = $_SESSION["cart"][$row[0]];
                    if ($count > 0) {
                        echo '<tr>';
                        echo '<td align="center">' . $count . "</td>";
                        echo '<td align="center">' . $row[1] . "</td>";
                        echo '<td align="center">' . $row[2] . "</td>";
                        echo '<td align="center">' . $count * $row[2] . "</td>";
                        echo '<td><form action="shoppingcart.php" method="post">';
                        echo '<input type="hidden" name ="pro_id" value = "' . $row[0] . '">';
                        echo '<input type = "submit" name= "submit" class="button" value = "Remove">';
                        echo '</form></td>';
                        echo '</tr>';
                    }
                    $total += $count * $row[2];
                }
            }
            echo '<td>Balance Due:' . $total . "</td>";
            ?>
            <br> <a href="productview.php"><h2 style="color: black;margin-top: 35px">Back To Product Store</h2></a>
        </table>
        <input type = "submit" class="button" value = "Pay Now">
    </body>
</html>