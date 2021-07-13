<?php
    include "../common/databaseConnect.php";
    $sql = "SELECT * FROM `jobs`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>&nbsp;<button class='closeJobOpening' onclick='deleteJobOpening(\"".$row["id"]."\")'><i class='fa fa-window-close' aria-hidden='true'></i></button></td>";
        echo "<tr>";
    }
    include "../common/closeDbConn.php";
?>