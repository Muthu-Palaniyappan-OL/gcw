<?php
    session_start();
    echo "<tr><th>Session</th><th>IP</th></tr><th>Country</th></tr>";
    $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
    $sql = "SELECT * FROM `active_user`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["session"]."</td>";
        session_id($row["session"]);
        session_start();
        echo "<td>".$_SERVER["HTTP_CLIENT_IP"]."</td>";
        echo "<td>".$_SERVER["REMOTE_ADDR"]."</td>";
        echo "</tr>";
        echo $_SESSION["HTTP_CLIENT_IP"];
    }
    mysqli_close($conn);
?>