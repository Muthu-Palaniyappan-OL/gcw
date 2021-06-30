<?php
    echo "<tr><th>Page</th><th>Visitor Count</th></tr>";
    $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
    if($_GET["q"] == "Today")
    $sql = "SELECT * FROM `visitor_count` WHERE `date`='".date("Y-m-d")."';";
    if($_GET["q"]=="Month")
    $sql = "SELECT `page`, SUM(visit_count) as visit_count FROM `visitor_count` WHERE `date` BETWEEN '".date("Y-m-d", strtotime("last month"))."' AND '".date("Y-m-d")."' GROUP BY `page`";
    if($_GET["q"]=="Year")
    $sql = "SELECT `page`, SUM(visit_count) as visit_count FROM `visitor_count` WHERE `date` BETWEEN '".date("Y-m-d", strtotime("last year"))."' AND '".date("Y-m-d")."' GROUP BY `page`";
    if($_GET["q"]=="AllTime")
    $sql = "SELECT `page`, SUM(visit_count) as visit_count FROM `visitor_count` GROUP BY `page`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["page"]."</td>";
        echo "<td>".$row["visit_count"]."</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
?>