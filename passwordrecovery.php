<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#E6E6FA" text = "blue">
    <center><h3><?php
            echo '<p align="middle"><font size="5" color="black">';
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "Online_Store";
            //create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            $myusername = mysqli_real_escape_string($con, $_POST['u_name']);
            $secquestion = mysqli_real_escape_string($con, $_POST['sec_question']);
            $mypassword = mysqli_real_escape_string($con, $_POST['n_passwd']);
            $repassword = mysqli_real_escape_string($con, $_POST['re_passwd']);
            $sql = "SELECT * from reg_data where UserNameORMob = '$myusername' and PasswordRecovery = '$secquestion'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);
            if ($mypassword == $repassword) {
                if ($count == 1) {
                    $sql = "UPDATE reg_data SET Password = '$mypassword' WHERE UserNameORMob = '$myusername'";
                    if (mysqli_query($con, $sql)) {
                        echo '<br>Successfully Changed Password.';
                    }
                }
            } else {
                echo "<br>Password Mismatched Try again!";
            }
            ?></h3>
        <a href="index.html">Log In</a>
        </font>
    </center>
</body>
</html>



