<?php
session_start();
$_SESSION["cart"] = array();
?>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        <table style =width:100%;>
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE</font></h1></td>
                <td><center><?php
                $db_host = "localhost";
                $db_user = "root";
                $db_password = "";
                $DB_nm = "Online_Store";
//create connection
                $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
                $uid = (isset($_SESSION["u_id"]) ? $_SESSION["u_id"] : $_POST['u_name']);
                $passwd = (isset($_SESSION["passwd"]) ? $_SESSION["passwd"] : $_POST['password']);
                $myusername = mysqli_real_escape_string($con, $uid);
                $mypassword = mysqli_real_escape_string($con, $passwd);
                $sql = "SELECT * from reg_data where UserNameORMob = '$myusername' and Password = '$mypassword'";
                $ret = mysqli_query($con, $sql);
                $count = mysqli_num_rows($ret);
                echo '<p align="middle"><font size="5" color="white">';
                if ($count == 1) {
//                echo "Log in successfull";
                    $fieldinfo = mysqli_fetch_row($ret);
                    printf("<br>Welcome To Our Store: %s", $fieldinfo[0]);
                    echo '<br><a href="profile.php" style ="color:white"><font size="3">View Profile.</font></a>';
                    echo '<br><a href="productview.php" style ="color:white"><font size="3">product stored.</font></a>';
                    echo '<br><a href="index.php" style ="color:white"><font size="3">Log Out</font></a>';
                    $_SESSION["u_id"] = $fieldinfo[2];
                    $_SESSION["passwd"] = $fieldinfo[7];
                } else {
                    echo "Not registered <br>";
                    echo '<br> <a href="index.php" style ="color:white">Want To Rigister.</a>';
                }
                $sql = "select * from product_info";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_row($result)) {
                        $_SESSION["cart"][$row[0]] = 0;
                        echo '</font>';
                        echo '</p>';
                    }
                }
                ?></center></td>
    </tr>
</table>
</body>
</html>
