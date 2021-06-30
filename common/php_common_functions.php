<?php

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function recordUser($pagename){
    if(!isset($_SESSION)){
        session_start();
        $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
        $sql = "INSERT INTO `activeUser` VALUES ('".session_id()."','".date("H:i:s")."','".$_SERVER["REMOTE_ADDR"]."');";
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
        $_SESSION["IP"] = getUserIpAddr();
        echo getUserIpAddr();
        $_SESSION["country"] = @json_decode(file_get_contents("https://api.country.is"+$_SESSION["IP"]))->geoplugin_countryName;
        $_SESSION["userType"] = "normalUser";
        $_SESSION["userActivityStatus"] = "active";
        mysqli_close($conn);
    }
}
?>