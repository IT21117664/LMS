<?php

    require('config.php');
//--------------------------------------------------------------------------
    $userID = 1;

    $sqlLoadUser = "SELECT * FROM `user` WHERE `user`.userID =  '1'";

    $resultLoadUser = mysqli_query($con, $sqlLoadUser);
        $resultLoadUserCheck = mysqli_num_rows($resultLoadUser);
        if ($resultLoadUserCheck > 0){
            while ($rowLoadUser = mysqli_fetch_assoc($resultLoadUser)){
                
            }}
//--------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY - ADMIN</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <?php require('Header.php'); ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
        </ul>
    </div><br>

    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <div class="card">
                <img src="./img/avatar/1.jpg" class="proImg" alt="Avatar" id="avator"><br>
                <input type="file" class="btn info" name="changeImg">
                <div class="cardDetails">
                    <div class="row">
                        <form action="#" method="post">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" value="Ranush" class="txt formlong" readonly>
                            
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" value="Mithila" class="txt formlong" readonly>

                            <label for="nwi">Name With Initial</label>
                            <input type="text" id="nwi" name="nwi" value="M. M. P. R. M. Bandara" class="txt formlong" readonly>

                            <label for="mob">Mobile Number</label>
                            <input type="text" id="mob" name="mob" value="0713501969" class="txt formlong">

                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" value="No 22, Isipathana mawatha, Polonnaruwa" class="txt formlong">

                            <label for="mail">E - mail</label>
                            <input type="email" id="mail" name="mail" value="it21117664@my.sliit.lk" class="txt formlong" readonly>

                            <label for="dob">Date Of Birth</label>
                            <input type="text" id="dob" name="dob" value="11/12/2000" class="txt formlong" readonly>

                            <div class="right">
                                <button type="reset" class="btn danger">Clear</button>
                                <button type="submit" class="btn success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('Footer.php'); ?>
    <script> carousel();</script>
</body>
</html>