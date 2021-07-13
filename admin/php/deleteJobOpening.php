<?php
    include "../../common/databaseConnect.php";
    $sql = "DELETE FROM `jobs` WHERE `id`='".$_GET["s"]."';";
    $result = mysqli_query($conn, $sql);
    include "../../common/closeDbConn.php";
    header("Location: ../index.php");
?>