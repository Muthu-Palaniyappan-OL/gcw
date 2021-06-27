<?php
function recordUser($pagename){
    if(!isset($_SESSION)){
        session_start();
        $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
        $sql = "INSERT INTO `active_user` VALUES ('".session_id()."','".date("H:i:s")."');";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM `visitor_count` WHERE `date`='".date("Y-m-d")."';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)==null){
            $sql = "INSERT INTO `visitor_count`(`page`, `visit_count`, `date`) VALUES".
                "('landingpage', 0, '".date("Y-m-d")."'),".
                "('aboutUs', 0, '".date("Y-m-d")."'),".
                "('careers', 0, '".date("Y-m-d")."'),".
                "('contactUs', 0, '".date("Y-m-d")."'),".
                "('investor', 0, '".date("Y-m-d")."'),".
                "('media', 0, '".date("Y-m-d")."'),".
                "('products', 0, '".date("Y-m-d")."');";
            mysqli_query($conn, $sql);

        }
        $sql ="UPDATE `visitor_count` SET visit_count=visit_count+1 WHERE `date`='".date("Y-m-d")."' AND `page`='".$pagename."';";
        mysqli_query($conn, $sql);
        $_SESSION["userType"] = "normalUser";
        $_SESSION["userActivityStatus"] = "active";
        mysqli_close($conn);
    }
}
function numberOFusers(){
    $conn = mysqli_connect("localhost:3306","muthu","muthumuthu","gcw_db");
    $sql = "SELECT * FROM `visitor_count`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["page"]."</td>";
        echo "<td>".$row["visit_count"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
}
?>