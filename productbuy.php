
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>product buy</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">        
    </head>
    <body>
        <table style= width:100%;>
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
            </tr>
        </table>
        <?php
        // connect to database
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $DB_nm = "online_store";
        $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
        // Fetch user balance from user id
        $uid = mysqli_real_escape_string($con, $_SESSION["u_id"]);
        $sql = "select * from reg_data where UserNameORMob = '$uid'";
        $result = mysqli_query($con, $sql);
        $row1 = mysqli_fetch_row($result);
        echo '<p style=margin-top:50px; align="middle"><font size="5" color="black">';
        echo 'Previous Balance in Your A/C :' . $row1[8] . "<br>";
        $total = $_POST["total"];
        if ($row1[8] >= $total) { // if user has sufficient balance
            // Display invoice
            echo '<fieldset>';
            echo '<table style="width: 50%" align="center">';
            echo '<h2 style="text-align:center">Invoice</h2>';
            echo '<hr width="50%">';
            $sql = "select * from product_info";
            $result = mysqli_query($con, $sql);
            $myfile = fopen("invoice.txt", "w");
            fwrite($myfile,"\t\t"."Invoice"."\n\n\n");
            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    $count = $_SESSION["cart"][$row[0]];
                    if ($count > 0) {
                        echo '<tr>';
                        echo '<td align="left">' . $row[1] . '</td>';
                        echo '<td align="right">' . $row[2] . ' x ' .
                        $count . ' = ' . ($row[2] * $count) . '</td>';
                        echo '</tr>';
                        fwrite($myfile, $row[1] ."\t\t\t". $row[2] .'x'. $count .'='.
                                $row[2] * $count ."\n");
                    }
                }
            }
            fclose($myfile);
            echo '</table>';
            echo '<hr width="50%">';
            echo '<table style="width: 50%" align="center">';
            echo '<tr>';
            echo '<td align="left"><b>Total:</b></td>';
            echo '<td align="right"><b>' . $total . '</b></td>';
            echo '</tr>';
            echo '</table>';
            echo '<h1 style="text-align:right"><a href = "invoice.txt" ><b>Download Invoice</b></a></h1>';
            echo '</fieldset>';
            // Update user balance
            $finalAC = mysqli_real_escape_string($con, ($row1[8] - $total));
            $sql = "update reg_data set AC_info = '$finalAC' where usernameormob = '$uid'";
            $result = mysqli_query($con, $sql);
        } else {
            echo 'Not sufficient balance!<br>';
        }
        $sql = "select * from reg_data where UserNameORMob = '$uid'";
        $result = mysqli_query($con, $sql);
        $row3 = mysqli_fetch_row($result);
        echo 'Current Balance in Your A/C :' . $row3[8] . "<br>";
        echo '<form action = "login.php" method = "post">';
        echo '<br><input type = "submit" class = "button" value = "Thank You"></td></form>';
        echo '</font></p>';
        ?>
    </body>
</head>
</html>
