<?php
    include "../common/databaseConnect.php";
    $sql = "SELECT * FROM `jobApplications`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["First_Name"]." ".$row["Last_Name"]."</td>";
        echo "<td>".$row["Email_Address"]."</td>";
        echo "<td>".$row["Position"]."</td>";
        echo "<td>&nbsp;<button class='closeJobOpening' onclick='deletTheApplication(\"".$row["Email_Address"]."\")'><i class='fa fa-window-close' aria-hidden='true'></i></button></td>";
        echo "<tr>";
    }
    include "../common/closeDbConn.php";
?>