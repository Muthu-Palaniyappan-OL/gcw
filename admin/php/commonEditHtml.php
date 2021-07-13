<?php
    include "../../common/databaseConnect.php";
    if(isset($_POST["abtUs"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["abtUs"]."' WHERE `name`='abtUs';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    if(isset($_POST["Hist"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["Hist"]."' WHERE `name`='Hist';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    if(isset($_POST["invInfo"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["invInfo"]."' WHERE `name`='invInfo';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    if(isset($_POST["product1"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["product1"]."' WHERE `name`='product1';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    if(isset($_POST["product2"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["product2"]."' WHERE `name`='product2';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    if(isset($_POST["product3"])){
        $sql = "UPDATE `Htmldata` SET `txt`='".$_POST["product3"]."' WHERE `name`='product3';";
        echo $sql;
        mysqli_query($conn, $sql);
    }
    include "../../common/closeDbConn.php";
    header("Location: ../index.php");
?>