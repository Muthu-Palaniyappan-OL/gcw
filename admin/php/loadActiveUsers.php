<?php
    session_start();
    echo "<tr><th>Session</th><th>IP</th><th>Country</th></tr>";
    $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
    $sql = "SELECT * FROM `activeUser`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["session"]."</td>";
        session_id($row["session"]);
        session_start();
        echo "<td>".$_SESSION["IP"]."</td>";
        echo "<td>".$_SESSION["country"]."</td>";
        echo "</tr>";
        var_dump($_SESSION);
    }
    mysqli_close($conn);
?>