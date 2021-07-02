<?php
function recordUser($pagename){
    if(!isset($_SESSION)){
        session_start();
        include "databaseConnect.php";
        $sql = "INSERT INTO `activeUser` VALUES ('".session_id()."','".date("H:i:s", strtotime("+1 minutes"))."','".$_SERVER["REMOTE_ADDR"]."');";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM `visitor_count` WHERE `date`='".date("Y-m-d")."';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)==null){
            $sql = "INSERT INTO `visitor_count`(`page`, `visit_count`, `date`) VALUES".
            "('landingpage', 0, '".date("Y-m-d")."'),".
            "('aboutUs', 0, '".date("Y-m-d")."'),".
            "('careers', 0, '".date("Y-m-d")."'),".
            "('contactUs', 0, '".date("Y-m-d")."'),".
            "('investor', 0, '".date("Y-m-d")."'),".
            "('media', 0, '".date("Y-m-d")."'),".
            "('products', 0, '".date("Y-m-d")."');";
            mysqli_query($conn, $sql);
            
        }
        $sql ="UPDATE `visitor_count` SET visit_count=visit_count+1 WHERE `date`='".date("Y-m-d")."' AND `page`='".$pagename."';";
        mysqli_query($conn, $sql);
        // User $_SERVER['REMOTE_ADDR'] When deploying
        echo $_SERVER["REMOTE_ADDR"];
        $_SESSION["IP"] = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com")); //reading public IP address
        $_SESSION["country"] = json_decode(file_get_contents("https://api.country.is/".$_SESSION["IP"]))->country;
        $_SESSION["userType"] = "normalUser"; //Declaring the user type whether admin or non admin
        $_SESSION["Device"] = $_SERVER["HTTP_USER_AGENT"]; //Gets browser and device details
        include "closeDbConn.php";
    }
    else{
        if($_SESSION["userType"]=="normalUser"){
            include "databaseConnect.php";
            $sql ="UPDATE `activeUser` SET visit_count=visit_count+1 WHERE `date`='".date("Y-m-d")."' AND `page`='".$pagename."';";
            mysqli_query($conn, $sql);
            include "closeDbConn.php";
        }
    }
}
?>