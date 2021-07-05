<?php
    include "databaseConnect.php";
    $sql = "SELECT * FROM media";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='announcementBox'>";
        echo "<h3>".$row["title"]."</h3>";
        echo "<small>".$row["meta"]."</small>";
        echo "<p>".$row["text"]."</p>";
        echo "</div>";
    }
    include "closeDbConn.php";
?>