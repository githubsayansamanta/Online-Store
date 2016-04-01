<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor = "#289002" text = "white">
        <?php
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
            echo "Connection Successfull";
        }
        $f_name = mysqli_real_escape_string($con, $_POST["f_name"]);
        $s_name = mysqli_real_escape_string($con, $_POST["s_name"]);
        $u_name = mysqli_real_escape_string($con, $_POST["u_id"]);
        $n_passwd = mysqli_real_escape_string($con, $_POST["n_passwd"]);
        $re_passwd = mysqli_real_escape_string($con, $_POST["re_passwd"]);
        $email = mysqli_real_escape_string($con, $_POST["mail_id"]);
        $sex = mysqli_real_escape_string($con, $_POST["gender"]);
        $dob = mysqli_real_escape_string($con, $_POST["dob"]);
//        echo $f_name;
//        echo $s_name;
//        echo $u_name;
//        echo $n_passwd;
//        echo $re_passwd;
//        echo $email;
//        echo $sex;
//        echo $dob;
        $sql = "insert into reg_data values('$f_name', '$s_name', '$u_name', '$n_passwd', '$re_passwd', '$email','$sex','$dob')";
        if (mysqli_query($con, $sql)) {
            echo 'Successfully inserted into Database';
        } else {
            echo "Not Successful!" . mysqli_error($con);
        }
        //close connection
        mysqli_close($con);
        ?> 
    </body>
</html>