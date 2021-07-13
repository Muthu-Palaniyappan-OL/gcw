<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags-->
    <?php include "common/meta_data.php"; ?>

    <?php include "common/php_common_functions.php" ?>
    <?php if($_SESSION["userType"]=="Admin"){session_start();}else{recordUser("landingpage");} ?>
    
    <!-- Base Links -->
    <base href=".">

    <!-- Page Title-->
    <title>Generic Corporate Company</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mainpage_style.css">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Font Awwesome 4 -->

    <!-- Java Script -->
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
    
    <!-- Header Of The Page -->
    <?php include "common/header.php"; ?>
    
    <main>
        <div class="Cover">
            <img src="./assets/img/Hands_Coat.png" alt="A Image" srcset="">
        </div>
        <div class="Building">
            <img src="./assets/img/structural.png" alt="A Image" srcset="">
        </div>
        <div class="AboutUS">
            <h3>About Us</h3>
            <p class="editable" id="PabtUs">
                <?php showData("abtUs"); ?>
            </p>
        </div>
    </main>

    <!-- Newsletter And Footer Of The Page-->
    <?php include "common/footer.php"; ?>

    <?php
        // This adds Save And Cancell Buttons If The userType is Admin
        adminPrevileges("landingpage");
    ?>
</body>
</html>