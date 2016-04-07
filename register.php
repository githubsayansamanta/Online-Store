<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#E6E6FA" text = "blue">
    <center><h2><?php
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "Online_Store";
            //create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            //check connection
            if (!$con) {
                die("Connection Failed" . mysqli_connect_error());
            } else {
                echo "Connection Successfull\n";
            }
            $f_name = mysqli_real_escape_string($con, $_POST["f_name"]);
            $s_name = mysqli_real_escape_string($con, $_POST["s_name"]);
            $u_name = mysqli_real_escape_string($con, $_POST["u_id"]);
            $n_passwd = mysqli_real_escape_string($con, $_POST["n_passwd"]);
            $re_passwd = mysqli_real_escape_string($con, $_POST["re_passwd"]);
            $email = mysqli_real_escape_string($con, $_POST["mail_id"]);
            $sex = mysqli_real_escape_string($con, $_POST["gender"]);
            $dob_m = $_POST["month"];
            $dob_d = $_POST["day"];
            $dob_y = $_POST["year"];
            // concate the variable
            $dob = mysqli_real_escape_string($con, $dob_m . $dob_d . $dob_y);
            $finalAC = mysqli_real_escape_string($con, $_POST["ac_info"]);
//        echo $f_name;
//        echo $s_name;
//        echo $u_name;
//        echo $n_passwd;
//        echo $re_passwd;
//        echo $email;
//        echo $sex;
//        echo $dob;
            $sq_quetion = mysqli_real_escape_string($con, $_POST["sec_question"]);
            if ($n_passwd == $re_passwd) {
                $sql = "insert into reg_data values('$f_name', '$s_name', '$u_name', '$email','$sex','$dob', '$sq_quetion', '$n_passwd','$finalAC')";
                if (mysqli_query($con, $sql)) {
                    echo '<br>Successfully Register.';
                    $sql = "select * from reg_data where UserNameORMob = '$u_name'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_row($result);
                    echo '<br>Current Balance in Your A/C :' . $row[8] . "<br>";
                }
            } else {
                echo "<br> New Password Mismatched with Confirm Password!" . mysqli_error($con);
            }

            //close connection
            mysqli_close($con);
            ?>
            <br><a href="index.html">Want to Log In</a>
        </h2>
    </body>
</html>