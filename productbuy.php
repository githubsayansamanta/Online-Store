
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>productbuy</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">        
    </head>
    <body>
        <table style= width:100%;>
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
            </tr>
        </table>
        <?php
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $DB_nm = "Online_Store";
        //create connection
        $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
        $uid = mysqli_real_escape_string($con, $_SESSION["u_id"]);
        $sql = "select * from reg_data where UserNameORMob = '$uid'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row1 = mysqli_fetch_row($result);
            echo '<form action = "productview.php" method = "post">';
            echo '<p align="middle"><font size="5" color="black">';
            echo 'Previous Balance in Your A/C :' . $row1[8] . "<br>";
            $pro_id = mysqli_real_escape_string($con, $_POST["pro_id"]);
            $book = mysqli_real_escape_string($con, $_POST["book"]);
            $sql = "select * from product_info where product_id ='$pro_id'";
            $result = mysqli_query($con, $sql);
            $row2 = mysqli_fetch_row($result);
            echo 'Total Price:' . $row2[2] * $book . "<br>";
            $finalAC = mysqli_real_escape_string($con, ($row1[8] - ($row2[2] * $book)));
            $sql = "update reg_data set AC_info = '$finalAC' where usernameormob = '$uid'";
            $result = mysqli_query($con, $sql);
            $sql = "select * from reg_data where UserNameORMob = '$uid'";
            $result = mysqli_query($con, $sql);
            $row3 = mysqli_fetch_row($result);
            echo 'Current Balance in Your A/C :' . $row3[8] . "<br>";
            echo '<br><input type = "submit" class = "button" value = "Thank You"></td>
        </font>
        </p>';
        } else {
            echo 'Not entered';
        }
        ?>
<!--<center><h3>
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $DB_nm = "Online_Store";

    //create connection
    $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
    $price = mysqli_real_escape_string($con, $_POST['pro_price']);
    $sql = "SELECT * from product_info where product_id = '$' and pro_name = '$'";
    $result = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($ret);
    $fieldinfo = mysqli_fetch_row($result);
    printf("<br>%s", $fieldinfo[2]);
    ?></h3>-->
    </body>
</head>
</html>
