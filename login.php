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
        <style>
            body{
                background-color: #dfe3ee;
                background-image: url("http://www.tamba.co.uk/assets/img/bg-darkblue.jpg");
                background-repeat:repeat-x;
                background-size: auto 130px;
                /*background-image: url("images/bgimage.jpg");*/
            }
            h1 {
                color: White;
                margin-top: 5px; 
                /*line-height: 50pt;*/
                font-family: calibri;
                font-style: italic;
                text-align: left;
            } 
        </style>
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
                    $myusername = mysqli_real_escape_string($con, $_POST['u_name']);
                    $mypassword = mysqli_real_escape_string($con, $_POST['password']);
                    $sql = "SELECT * from reg_data where UserNameORMob = '$myusername' and Password = '$mypassword'";
                    $ret = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($ret);
                    echo '<p align="middle"><font size="5" color="white">';
                    if ($count == 1) {
//                echo "Log in successfull";
                        $fieldinfo = mysqli_fetch_row($ret);
                        printf("<br>Welcome To Our Store : %s", $fieldinfo[0]);
                        echo '<br><a href="productview.php" style ="color:white">product stored</a>';
                        echo '<br><a href="index.html" style ="color:white">Log Out</a>';
                        $_SESSION["u_id"] = $fieldinfo[2];
                    } else {
                        echo "Not registered <br>";
                        echo '<br> <a href="index.html" style ="color:white">Want To Rigister.</a>';
                    }
                    echo '</font>';
                    echo '</p>';
                    ?></center></td>
    </tr>
</table>
</body>
</html>
