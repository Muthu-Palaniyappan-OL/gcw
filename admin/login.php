<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags-->
    <?php include "../common/meta_data.php"; ?>
    
    <!-- Base Links -->
    <base href=".">

    <!-- Page Title-->
    <title>Generic Corporate Company - Admin Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Font Awwesome 4 -->

    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <h1><a href="../index.php">Generic Corporate Company<a> - Dashboard Login</h1>
    </header>

    <main class="loginDiv">
    <form action="login.php" method="POST">
        <input type="text" name="userName" placeholder="Enter Your username">
        <input type="password" name="passWord" placeholder="Enter Your Password">
        <input type="submit" value="Submit">
    </form>
    </main>
</body>
</html>
<?php
    session_start();
    if($_SESSION["userType"]=="Admin"){
        header("Location: index.php");
    }
    else{
        if(isset($_POST["userName"]) && $_SESSION["Attempt"]<=3){
            if($_POST["userName"]=="admin" && $_POST["passWord"]=="admin"){
                $_SESSION["PAttempt"] = 0;
                $_SESSION["userType"]="Admin";
                header("Location: index.php");
            }
            else{
                $_SESSION["PAttempt"] += 1;
                echo "You have Only ".(3-$_SESSION["PAttempt"])." Attempts Left.";
            }
        }
        if(3 - $_SESSION["PAttempt"] <= 0){
            echo "<script>$('.loginDiv').remove();</script>";
        }
    }
?>