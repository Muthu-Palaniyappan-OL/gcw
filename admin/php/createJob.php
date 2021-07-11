<?php
    include "../../common/databaseConnect.php";
    $sql = "INSERT INTO `jobs` (`title`, `discription`) VALUES ('".$_POST["jobTitle"]."','".$_POST["jobDiscription"]."');";
    if($_POST["jobTitle"]==null || $_POST["jobDiscription"]==null){
        echo "Job Creating Form wasn't Filled Properly..<br>";
        echo "<a href='../index.php'> Go Back </a>";
        header("Refresh: 3; Location: ../index.php");
    }
    else{
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
    }
    include "../../common/closeDbConn.php";
?>