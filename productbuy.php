
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
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $DB_nm = "Online_Store";
        //create connection
        $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
        $uid = mysqli_real_escape_string($con, $_SESSION["u_id"]);
        $sql = "select * from reg_data where UserNameORMob = '$uid'";
        $result = mysqli_query($con, $sql);
        $row1 = mysqli_fetch_row($result);
        echo '<form action = "login.php" method = "post" style=margin-top:35px;>';
        echo '<p align="middle"><font size="5" color="black">';
        echo 'Previous Balance in Your A/C :' . $row1[8] . "<br>";
        $total = $_POST["total"];
        echo 'Total Price:' . $total . "<br>";
        if ($row1[8] >= $total) {
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
        echo '<br><input type = "submit" class = "button" value = "Thank You"></td>
        </font>
        </p></form>';
        ?>
    </body>
</head>
</html>
