<?php
    include "databaseConnect.php";
    $sql = "SELECT * FROM jobs";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='productCard'>";
        echo "<p>";
        echo "<strong>".$row["title"]."</strong><br>";
        echo $row["discription"];
        echo "<br><a href='pages/careers/jobApplication.php'>Apply For Job</a>";
        echo "</p>";
        echo "</div>";
    }
    include "closeDbConn.php";
?>

