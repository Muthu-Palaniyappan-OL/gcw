<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Meta Tags-->
        <?php include "../../common/meta_data.php"; ?>
        
        <?php include "../../common/php_common_functions.php" ?>
        <?php recordUser("contactUs");?>
        <?php if($_SESSION["userType"]=="Admin"){ echo "Admin Mode";}else{;} ?>
        <!-- Base Links -->
    <base href="../../">

    <!-- Page Title-->
    <title>Generic Corporate Company</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    <link rel="stylesheet" href="./css/conatctUs.css">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Font Awwesome 4 -->

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <?php

        //Intro Logo Loading PHP Embeded Script
        if(isset(($_COOKIE["visited"])) and $_COOKIE["visited"]==true){
            ;
        }
        else{
            setcookie("visited",true,time()+10000,"/","",0);
            echo "<img src='assets/img/logo.png' alt='Logo Opening Animation' class='logo_loading_things opening_logo_loading_img'>
            <div class='loading_cover logo_loading_things'></div>";
            echo '<script>$(".logo_loading_things").css("visibility", "visible");
            $(".logo_loading_things").fadeIn(2000);
            $(".logo_loading_things").fadeOut(2000);</script>';
        }
    ?>
    
    <!-- Header Of The Page-->
    <?php include "../../common/header.php"; ?>
    
    <main>
        <form action="pages/contactUs/index.php" method="post" class="ContactUsForm">
            <h3>Contact Us Form</h3>
            <input type="text" name="name" id="name">
            <input type="email" name="email" id="email"> <br><br>
            <textarea name="message" id="message"></textarea>
            <input type="submit" name="contactUs" value="Submit The Form">
        </form>
        <h3>We Are In</h3>
        <div id="map" class="map"></div>
        <div class="address">
            <h3>Contact Information</h3>
            <address>
                20, 18, jhgwugijhlkoijk <br>
                phone: 987982113 <br>
                mail: muthuhhidee@ifd.com
            </address>
        </div>
    </main>
    <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
            ],
            view: new ol.View({
            center: ol.proj.fromLonLat([80.15, 13]),
            zoom: 4
            })
        });
    </script>

    <!-- Newsletter And Footer Of The Page-->
    <?php include "../../common/footer.php"; ?>

    <?php
        // This adds Save And Cancell Buttons If The userType is Admin
        adminPrevileges("investor");
    ?>
</body>
</html>
<?php
    if(isset($_POST["contactUs"])){
        include "../../common/databaseConnect.php";
        $sql = "INSERT INTO `contactUsInfo` (`name`, `email`, `message`) VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";
        if(mysqli_query($conn, $sql)){
            echo "<script>displayMessage('Registerd Succesfully')</script>";
        }
        else{
            echo "<script>displayMessage('Not Registered Succesfully')</script>";
        }
        include "../../common/closeDbConn.php";
    }
?>