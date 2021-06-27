<?php
    session_start();
    $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
    $sql = "SELECT * FROM `active_user`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    echo $row['session']." - ".$row['time'];
    }
    mysqli_close($conn);
?>