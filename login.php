<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#289002" text = "white">
    <center><h3><?php
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
            if ($count == 1) {
                echo "Log in successfull";
            } else {
                echo "Not register";
            }
            $fieldinfo = mysqli_fetch_row($ret);
            printf("<br>Welcome: %s", $fieldinfo[0]);
            ?></h3>
        <a href="productview.html" target="_blank">Visit Online Store</a><br>
        <a href="index.html" target="_blank">Log Out</a>
    </body>
</html>
