<?php
session_start();
//) if(session_start)){
//    echo 'successfull';
//} else {
//    echo 'Not';
//}
?>
<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#289002" text = "white">
    <center><h3><cent<?php
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "Online_Store";
//create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            $myusername = mysqli_real_escape_string($con, $_POST['u_name']);
            $mypassword = mysqli_real_escape_string($con, $_POST['password']);
            $sql = "SELECT * from reg_data where UserNameORMob = '$myusername' and Password = '$mypassword'";
            $ret = mysqli_query($con, $sql);
            $count = mysqli_num_rows($ret);
            echo '<p align="middle"><font size="5" color="black">';
            if ($count == 1) {
//                echo "Log in successfull";
                $fieldinfo = mysqli_fetch_row($ret);
                printf("<br>Welcome To Our Store : %s", $fieldinfo[0]);
                echo '<br> <a href="productview.php">product stored</a>';
                echo '<br> <a href="index.html">Log Out</a>';
                $_SESSION["u_id"] = $fieldinfo[2];
            } else {
                echo "Not registered <br>";
                 echo '<br> <a href="index.html">Want To Rigister</a>';
            }
            ?></font></p></h3>

</body>
</html>
