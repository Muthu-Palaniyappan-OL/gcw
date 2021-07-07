<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Meta Tags-->
        <?php include "../../common/meta_data.php"; ?>
        
        <?php include "../../common/php_common_functions.php" ?>
        <?php recordUser("careers");?>
        <?php if($_SESSION["userType"]=="Admin"){ echo "Admin Mode";}else{;} ?>
        <!-- Base Links -->
    <base href="../../">

    <!-- Page Title-->
    <title>Generic Corporate Company</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/products.css">
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
    
    <!-- Header Of The Page-->
    <?php include "../../common/header.php"; ?>
    
    <main>
        <div class="productCard1">
            <div class="productLook">
                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            </div>
            <p class="editable" id="Pproduct1">
                <strong>We Are Open</strong><br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, provident unde saepe quaerat ipsum, sapiente modi explicabo necessitatibus rem doloremque sint. Sit, reprehenderit veniam. Temporibus assumenda dolor ullam aut molestiae obcaecati error aliquam commodi nemo architecto, in inventore, hic ratione nobis. Eius asperiores, laborum eveniet non officia tempora ratione distinctio cumque voluptatem dolorem, voluptatum consequatur illum ex aliquid consectetur fuga neque molestias explicabo reprehenderit impedit labore sequi alias quis sunt! Quam magnam eos fugiat ipsum maxime aperiam nihil tempore magni?
                <br><a href="jobApplication.php">Apply For Job</a>
            </p>
        </div>
        <div class="productCard2">
            <div class="productLook">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
            </div>
            <p class="editable" id="Pproduct2">
                <strong>We Are Open</strong><br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, provident unde saepe quaerat ipsum, sapiente modi explicabo necessitatibus rem doloremque sint. Sit, reprehenderit veniam. Temporibus assumenda dolor ullam aut molestiae obcaecati error aliquam commodi nemo architecto, in inventore, hic ratione nobis. Eius asperiores, laborum eveniet non officia tempora ratione distinctio cumque voluptatem dolorem, voluptatum consequatur illum ex aliquid consectetur fuga neque molestias explicabo reprehenderit impedit labore sequi alias quis sunt! Quam magnam eos fugiat ipsum maxime aperiam nihil tempore magni?
                <br><a href="jobApplication.php">Apply For Job</a>
            </p>
        </div>
        <div class="productCard3">
            <div class="productLook">
                <i class="fa fa-car" aria-hidden="true"></i>
            </div>
            <p class="editable" id="Pproduct3">
                <strong>We Are Open</strong><br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, provident unde saepe quaerat ipsum, sapiente modi explicabo necessitatibus rem doloremque sint. Sit, reprehenderit veniam. Temporibus assumenda dolor ullam aut molestiae obcaecati error aliquam commodi nemo architecto, in inventore, hic ratione nobis. Eius asperiores, laborum eveniet non officia tempora ratione distinctio cumque voluptatem dolorem, voluptatum consequatur illum ex aliquid consectetur fuga neque molestias explicabo reprehenderit impedit labore sequi alias quis sunt! Quam magnam eos fugiat ipsum maxime aperiam nihil tempore magni?
                <br><a href="jobApplication.php">Apply For Job</a>
            </p>
        </div>
    </main>

    <!-- Newsletter And Footer Of The Page-->
    <?php include "../../common/footer.php"; ?>

    <?php
        // This adds Save And Cancell Buttons If The userType is Admin
        adminPrevileges("investor");
    ?>
</body>
</html>