<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#289002" text = "white">
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
                $sql = "insert into reg_data values('$f_name', '$s_name', '$u_name', '$email','$sex','$dob', '$sq_quetion', '$n_passwd')";
                if (mysqli_query($con, $sql)) {
                    echo '<br>Successfully Register.';
                }
            } else {
                echo "<br> New Password Mismatched with Confirm Password!" . mysqli_error($con);
            }
            //close connection
            mysqli_close($con);
            ?> </h2>
        <a href="index.html" target="_blank">Log In</a>
    </body>
</html>