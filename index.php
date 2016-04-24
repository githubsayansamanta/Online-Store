<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>store@online</title>
        <script src="scripts/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <style> 
            #a,#b,#c,#d{
                width: 18%;
                padding: 12px 20px;
                border: 2px solid blueviolet;
            }
            input[type=text]{
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                border: 2px solid blueviolet;
            }
            input[type=submit]{
                width: 15%;
                padding: 12px 20px;
                margin: 8px 0;
                border: 2px solid blueviolet;
                background-color: #59983b;
                color: White;
            }
        </style>
    </head>
    <body>
        <table style= width:100%;>
            <tr>
                <td><h1><font size="10">R.N Tagore STORE@ONLINE </font></h1></td>
                <td>
                    <form action = "login.php" method = "post">
                        <p align="right"><font size="5">
                            <input type="text" id="a" placeholder="User Id" name ="u_name" required>
                            <input type="password" id ="b" placeholder="Password" name ="password" required>
                            <input type = "submit" value = "Log In"><br>
                            <a href="passrecovery.html"><font size="5" color="white" >Forget Password!</font></a>
                            </font>
                        </p>
                    </form>
                </td>
            </tr>
        </table>
        <form name ="reg_form" action = "register.php" onsubmit="return validate()" method = "post">
            <!--<p align="left"><font size="5" color="black"></font>-->
            <h2 style="margin-left: 60%;"><font size="10"> Create an account.. </font></h2>
            <p align="right"><font size="5" color="black">
                <input type="text" id ="c" name ="f_name" placeholder="First Name" required>
                <input type="text" id ="d" name ="s_name" placeholder="Surname" required><br>
                <input type = "text" name = "mail_id" placeholder="Valid Mail ID" required><br>
                <input type="text" name ="u_id" placeholder="User Name or Mobile" required><br>
                <input type="text" name ="n_passwd" placeholder="New Password" required><br>
                <input type="text" name ="re_passwd" placeholder="Re-enter Password" onblur="check_pass()" required><br>
                Gender:
                <input type = "radio" name = "gender" value = "male" checked> Male
                <input type = "radio" name = "gender" value = "female"> Female
                <input type = "radio" name = "gender" value = "other"> Other<br>
                Date Of Birth:
                <select  name="month">
                    <option value="na">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select  name="day">
                    <option value="na">Day</option>
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
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="year">
                    <option value="na">Year</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                </select><br>
                <input type="text" name ="sec_question" placeholder="What Is Your Favorite Game" required><br>
                <input type="text" name ="ac_info" placeholder="Enter Amount Add to Your Account" onblur ="check_balance()" required><br>
                <input type = "submit" value = "Create an account"><br>
                </font>
            </p>
        </form>
    </body>
</html>