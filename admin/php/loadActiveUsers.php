<?php
    session_start();
    echo "<tr><th>IP</th><th>Country</th><th>Additional Info</th></tr>";
    include "../../common/databaseConnect.php";
    $sql = "SELECT * FROM `activeUser`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        session_id($row["session"]);
        session_start();
        echo "<td>".$_SESSION["IP"]."</td>";
        echo "<td>".$_SESSION["country"]."</td>";
        echo "<td>".$_SESSION["Device"]."</td>";
        echo "</tr>";
    }
    include "../../common/closeDbConn.php";
?>