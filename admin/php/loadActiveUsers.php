<?php
    session_start();
    echo "<tr><th>IP</th><th>Country</th><th>Additional Info</th></tr>";
    include "../../common/databaseConnect.php";
    $sql = "SELECT * FROM `activeUser`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["ipaddr"]."</td>";
        echo "<td>".$row["country"]."</td>";
        echo "<td>".$row["device"]."</td>";
        echo "</tr>";
    }
    include "../../common/closeDbConn.php";
?>