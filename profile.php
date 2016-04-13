<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>store@online</title>
        <script src="scripts/validate.js"></script>
        <style>
            h1 {
                color: White;
                margin-top: 5px; 
                line-height: 60pt;
                font-family: calibri;
                font-style: italic;
                text-align: left;
            } 
            body{
                background-color: #dfe3ee;
                background-image: url("http://www.tamba.co.uk/assets/img/bg-darkblue.jpg");
                background-repeat:repeat-x;
                background-size: auto 130px;
                /*background-image: url("images/bgimage.jpg");*/
            }
        </style>
    </head>
    <body>
        <table style= width:100%;>
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
                <td><h2 style="color: white"><font size="10"> Welcome.. </font></h2></td>
            </tr>
        </table>
        <table style=width:50%>
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
      if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    echo '<tr><td>';
//                    echo '<p align="middle"><font size="10" color="black">';
                    echo '<font size = "6">Name : ' . $row[0] . $row[1] ."</font><br>";
                    echo '<font size = "6">Last Name : ' . $row[2] . "</font><br>";
                    echo '</td></tr>';
                }
                }
                ?></table>
    </body>
</html>


