<?php
    include "../../common/databaseConnect.php";
    $sql = "DELETE FROM `contactUsInfo` WHERE `email`='".$_GET["s"]."';";
    $result = mysqli_query($conn, $sql);
    include "../../common/closeDbConn.php";
    header("Location: ../index.php");
?>