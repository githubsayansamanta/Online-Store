<!DOCTYPE html>
<html>
    <head>
        <title>product view</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .button {
                background-color: blue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body bgcolor="#E6E6FA" text = "black">
    <center><div><h1>Product Store</h1></div></center>

    <fieldset>
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
                    echo '<form action = "productbuy.php" method = "post">';
                    echo '<tr> <td> <p align="middle"><font size="5" color="black">';
//                        echo $row[0]. "<br>";
                    echo '<input type="hidden" name ="pro_id" value = "' . $row[0] . '"<br>';
                    echo 'Book Name : ' . $row[1] . "<br>";
//                        echo $row[3]. "<br>";
                    //echo $row[4]. "<br>";
                    echo '<img src="' . $row[4] . '" width="200" height="200" alt=""><br>';
                    echo 'Price : ' . $row[2] . "<br>";
                    echo 'Choose No Of Book:
                            <select name="book">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>';
                    echo '<br><input type = "submit" class="button" value = "Buy Now">';
                    echo '</form>';
                    echo '</p> </td> </tr>';
                }
            }
            ?>
<!--                <tr>
                <td align="middle"><img src="images/51ZV9E6VFTL.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Gitanjali By R.N Tagore</font></p>
                    <p align="middle"><font size="5" color="black">
                        Product Price:
                        <input type="text" name ="pro_price" required><br>
                        <input type="hidden" name ="pro_id" value="<?php echo "3"; ?>"<br>
                        Choose No Of Book:
                        <select name="book">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        </font>
                    </p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
                <td align="middle"><img src="images/51vyJmmazbL._SX322_BO1,204,203,200_.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">An Anthology By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>		
                <td align="middle"><img src="images/81jUj2upfsL.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Selected Stories By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
            </tr>
            <tr>
                <td align="middle"><img src="images/9788171677559.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Gora By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
                <td align="middle"><img src="images/9788171677795.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Chitra By R.N Tagore </font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>		
                <td align="middle"><img src="images/Lr_Tagore_jpg_1_1038228e.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Last Poem By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
            </tr>
            <tr>
                <td align="middle"><img src="images/rabindranath_tagore_one_hundred_songs_in_staff_idk232 - Copy.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">One Hundred Songs By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
                <td align="middle"><img src="images/riddle_plays_rabindranath_tagores_originally_written_ihf044 - Copy.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Riddle Plays By R.N Tagore</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>		
    <td align="middle"><img src="images/selected_writings_for_children__rabindranath_tagore_idc620.jpg" width="200" height="200" alt="">
                    <p align="middle"><font size="6" color="black">Selected Writing for Children</font></p>
                    <input type = "submit" class="button" value = "Buy Now"></td>
            </tr>-->
        </table>
    </fieldset>

</body>
</html>
