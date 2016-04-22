<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>product view</title>
        <script src="scripts/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <style>
            div.img {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 300px;
            }

            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
            </tr>
        </table>
        <table cellpadding="10" cellspacing="10" style="width:100%">
            <?php
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "Online_Store";
            //create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            $sql = "select * from product_info";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
//                    echo '<form action = "" method = "post">';
//                    echo '<tr> <td> <p align="middle"><font size="5" color="black">';
//                    echo '<input type="hidden" name ="pro_id" value = "' . $row[0] . '">';
//                    echo 'Book Name : ' . $row[1] . "<br>";
//                    echo '<img src="' . $row[4] . '" width="200" height="200" alt=""><br>';
//                    echo 'Price : ' . $row[2] . "<br>";
//                    echo 'Choose No Of Book:
//                            <select name="pro_cnt">
//                                <option value="1">1</option>
//                                <option value="2">2</option>
//                                <option value="3">3</option>
//                                <option value="4">4</option>
//                                <option value="5">5</option>
//                                <option value="6">6</option>
//                                <option value="7">7</option>
//                                <option value="8">8</option>
//                                <option value="9">9</option>
//                                <option value="10">10</option>
//                            </select>';
//                    echo '<br><input type = "submit" class="button" name="submitbutton" value = "Add To Cart">';
//                    echo '</form>';
//                    echo '</p> </td> </tr>';
                    echo
                    '<div class="img">
                    <img src="http://www.w3schools.com/css/img_fjords.jpg" alt="Fjords" width="300" height="200">
                    <div class="desc">Add a description of the image here</div>
                    </div>';
                }
            }
//            Associative Array  intialized
            if (isset($_POST["submitbutton"])) {
                $p_id = $_POST["pro_id"];
                $p_cnt = $_POST["pro_cnt"];
                echo $p_id;
                $_SESSION["cart"][$p_id] += $p_cnt;
            }
            ?>
            <br> <a href="shoppingcart.php"><h3 style="color: black;margin-top: 35px">Go To Cart.</h3></a>
        </table>
    </body>
</html>
