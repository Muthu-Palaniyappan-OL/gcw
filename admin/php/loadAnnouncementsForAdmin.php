<?php
    include "../common/databaseConnect.php";
    $sql = "SELECT * FROM `media`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>&nbsp;<button class='closeAnnouncement' onclick='deleteAnnouncement(\"".$row["id"]."\")'><i class='fa fa-window-close' aria-hidden='true'></i></button></td>";
        echo "<tr>";
    }
    while($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
    }
    include "../common/closeDbConn.php";
?>