<?php
    include "../../common/databaseConnect.php";
    $sql = "SELECT * FROM `media`;";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='announcementDiv'>";
        echo "<h3>".$row["title"]."</h3>";
        echo "<button class='closeAnnouncement' onclick='deleteAnnouncement(\"".$row["title"]."\")'><i class='fa fa-window-close' aria-hidden='true'></i></button>";
        echo "</div>";
    }
    include "../../common/closeDbConn.php";
?>