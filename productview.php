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
                border: 1px solid black;
                float: left;
                width: 300px;
            }

            /*            div.img:hover {
                            border: 1px solid #777;
                        }*/

            div.img img {
                width: 300px;
                height: 300px;
            }

            div.desc {
                padding: 10px;
                text-align: center;
            }
            div.head {
                padding: 8px;
                text-align: center;
                font: 20px calibri;
            }
        </style>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
            </tr>
        </table>
        <br> <a href="shoppingcart.php"><h3 style="color: black;margin-top: 30px">Go To Cart.</h3></a>
        <table cellpadding="10" cellspacing="10" style="width:100%">
            <?php
            $db_host = "localhost";
            $db_user = "root";
            $db_password = "";
            $DB_nm = "online_store";
            //create connection
            $con = mysqli_connect($db_host, $db_user, $db_password, $DB_nm);
            $sql = "select * from product_info";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    echo
                    '<div class="img">
                        <div class="head">' . $row[1] . '</div>
                        <img src="' . $row[4] . '">
                        <div class="desc">
                            Price : ' . $row[2] . '
                            <form action="" method="post">
                                <select name="pro_cnt">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <input type="hidden" name="pro_id" value="' . $row[0] . '">
                                <input type="submit" class="button" name="button" value="Add To Cart">
                            </form>
                        </div>
                    </div>';
                }
            }
//            Associative Array  intialized
            if (isset($_POST["button"])) {
                $p_id = $_POST["pro_id"];
                $p_cnt = $_POST["pro_cnt"];
                echo $p_id;
                $_SESSION["cart"][$p_id] += $p_cnt;
            }
            ?>
        </table>

    </body>
</html>
