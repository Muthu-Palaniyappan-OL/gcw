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
    include "../../common/closeDbConn.php";
    header("Location: ../index.php")
?>