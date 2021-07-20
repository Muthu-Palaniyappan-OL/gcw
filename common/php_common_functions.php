<?php
function recordUser($pagename){
    include "databaseConnect.php";
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

    session_start();
    if($_SESSION["userType"]==null){
        $sql ="UPDATE `visitor_count` SET visit_count=visit_count+1 WHERE `date`='".date("Y-m-d")."' AND `page`='".$pagename."';";
        mysqli_query($conn, $sql);
        // User $_SERVER['REMOTE_ADDR'] When deploying
        // For localhost trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"))
        $_SESSION["IP"] = $_SERVER['REMOTE_ADDR']; //reading public IP address
        $_SESSION["country"] = json_decode(file_get_contents("https://api.country.is/".$_SESSION["IP"]))->country;
        $_SESSION["userType"] = "normalUser"; //Declaring the user type whether admin or non admin
        $_SESSION["Device"] = $_SERVER["HTTP_USER_AGENT"]; //Gets browser and device details
        $_SESSION["PAttempt"] = 0; //Password Attempts
        $sql = "INSERT INTO `activeUser` VALUES ('".session_id()."','".date("H:i:s", strtotime("+1 minutes"))."','".$_SERVER["REMOTE_ADDR"]."','".$_SESSION["Device"]."', '".$_SESSION["country"]."');";
        mysqli_query($conn, $sql);
    }
    else{
        if($_SESSION["userType"]=="normalUser"){
            $sql = "UPDATE `activeUser` SET `time`='".date("H:i:s", strtotime("+1 minutes"))."' WHERE `session`='".session_id()."';";
            mysqli_query($conn, $sql);
        }
    }
    include "closeDbConn.php";
}

function showData($FromThisCell){
    include "databaseConnect.php";
    $sql = "SELECT txt FROM Htmldata WHERE `name`='".$FromThisCell."';";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo $row["txt"];
    }
    include "closeDbConn.php";
}

// This create save or cancel buttons for UserType Admin
function adminPrevileges($FromThisCell){
    if($_SESSION["userType"]=="Admin"){

        // Makes all editable class P tag Editable
        echo '<script>$(".editable").attr("contenteditable","true");</script>';
        
        // Form for editing
        echo '<form action="./admin/php/commonEditHtml.php" method="POST" class="editContentForm">';
        
        // This is amount of hidden input fields i have to make for each page
        if($FromThisCell == "landingpage"){
            echo '<input type="hidden" name="abtUs" id="abtUs">';
        }
        if($FromThisCell == "aboutUs"){
            echo '<input type="hidden" name="abtUs" id="abtUs">';
            echo '<input type="hidden" name="Hist" id="Hist">';
        }
        if($FromThisCell == "investor"){
            echo '<input type="hidden" name="invInfo" id="invInfo">';
        }
        if($FromThisCell == "products"){
            echo '<input type="hidden" name="product1" id="product1">';
            echo '<input type="hidden" name="product2" id="product2">';
            echo '<input type="hidden" name="product3" id="product3">';
        }

        // Submit Button That Saves The Changes and goes to admin page
        echo '<input type="Submit" onclick="updateHiddenInput(\''.$FromThisCell.'\');" value="Save Changes">';
        echo '</form>';

        // Cancels the changes and goes the admin page
        echo '<a href="./admin/index.php"><button class="editContentForm">Cancel Changes</button></a>';
    }
}
