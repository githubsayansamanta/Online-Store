<!DOCTYPE html>
<html>
    <head>
        <title>productbuy</title>
        <style> 
            body {
                background: url("images/BS-motiv.png");
                background-size: 400px 500px;
                background-repeat: no-repeat;
                padding-top: 40px;
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p align="middle"><font size="5" color="black">
            Choose No Of Book:
            <select name="book"><br>
                <option value="1">1</option><br>
                <option value="2">2</option><br>
                <option value="3">3</option><br>
                <option value="4">4</option><br>
                <option value="5">5</option><br>
                <option value="6">6</option><br>
                <option value="7">7</option><br>
                <option value="8">8</option><br>
                <option value="9">9</option><br>
                <option value="10">10</option><br>
            </select>
            <br>Total Price You Have to Pay:
            <input type="text" name ="t_price" required><br>
            <input type="checkbox" name="Check">Are You Want to Buy This Book.<br><br>
            <input type = "submit" class="button" value = "Pay Now"></td>
        </font>
    </p>

    <?php
    ?>
</body>
</head>
</html>
