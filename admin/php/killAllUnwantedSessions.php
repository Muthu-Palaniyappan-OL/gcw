<?php
    require("./common/databaseConnect.php");
    $sql = "SELECT * FROM `activeUser`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        if($row["time"]  < date("H:i:s", strtotime("now"))){
            $sql1 = "DELETE FROM `activeUser` WHERE `ipaddr`='".$row["ipaddr"]."';";
            mysqli_query($conn, $sql1);
        }
    }    
    require("./common/closeDbConn.php");
?>