<?php
    include "../../common/databaseConnect.php";
    if(isset($_POST["announcementSubmit"])){
        $sql = "INSERT INTO `media`(title, `meta`, `text`) VALUES ('".$_POST["title"]."', ".date("'m.d.y g:i a'")." ,'".$_POST["Message"]."');";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        header("Location: ../index.php");
    }
    include "../../common/closeDbConn.php";
?>