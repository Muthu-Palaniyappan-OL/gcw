<?php
    include "../common/databaseConnect.php";
    $sql = "SELECT * FROM `contactUsInfo`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["message"]."</td>";
        echo "<td>&nbsp;<button class='closeJobOpening' onclick='deleteTheContactus(\"".$row["email"]."\")'><i class='fa fa-window-close' aria-hidden='true'></i></button></td>";
        echo "<tr>";
    }
    include "../common/closeDbConn.php";
?>