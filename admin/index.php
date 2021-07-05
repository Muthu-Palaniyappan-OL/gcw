<?php
    session_start();
    if($_SESSION["userType"]=="Admin"){
        ;
    }
    else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags-->
    <?php include "../common/meta_data.php"; ?>
    
    <!-- Base Links -->
    <base href=".">

    <?php include "../common/php_common_functions.php" ?>

    <!-- Page Title-->
    <title>Generic Corporate Company - Admin Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Font Awwesome 4 -->

    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>Gceneric Coprate Company - Dashboard</h1>
    </header>
    <main>
        
        <!-- Asde For All The Admin Related Links -->
        <aside>
            <button onclick="openContentDiv('summaryContent');">Summary</button>
            <button onclick="openContentDiv('announcementsContent');">Announcements</button>
            <button onclick="openContentDiv('editpageContent');">Edit Pages</button>
            <button onclick="openContentDiv('contactUsContent');">Contactus Submissions</button>
            <button onclick="openContentDiv('jobApplicationsContent');">Job Applications</button>
            <button onclick="logout()">Log Out</button>
        </aside>

        <!-- This is the main Div where all the type of links load-->
        <div class="mainDetailsContent">
            
            <!-- This is the Div where active users and visit count is displayed-->
            <div class="summaryContent">
                <!-- Total Number Of Users -->
                <h3>Total Number Of Users</h3>
                <select id="viewDateOption">
                    <option value="Today">Today</option>
                    <option value="Month">Past Month</option>
                    <option value="Year">Past Year</option>
                    <option value="AllTime">All Time</option>
                </select>
            
                <br>

                <!--This table displays Total users -->
                <table id="userTable">
                    <script>
                        showUsers();    // This function is avialable in js folder of this folder
                        setInterval(function(){showUsers();},1000); //Sending Ajax Request every 1 sec
                        </script>
                </table>
                
                <br><hr>
                
                <h3>Active Users</h3>

                <br>
                
                <!--This table displays Active users -->
                <table id="ActiveUserTable">
                    <script>
                        showActiveUsers(); // This function is avialable in js folder of this folder
                        setInterval(function(){showActiveUsers();},1000); //Sending Ajax Request every 1 sec
                        </script>
                </table>
                
                <hr>
            </div>
            
            <!-- This is the Div where anncouncements can be made -->
            <div class="announcementsContent">
                <!-- -->
                <?php
                    include "./php/loadAnnouncementsForAdmin.php";
                ?>
                <div class="announcementDiv">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ratione.
                    <button class="closeAnnouncement" onclick="deleteAnnouncement('hi')"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                </div>
            </div>

            <!-- This is the Div where pages can be edited -->
            <div class="editpageContent">
                <!-- -->
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit <a href="../index.php">Landing Page</a><br>
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit <a href="../pages/aboutUs/index.php">About Us Page</a><br>
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit <a href="../pages/investor/index.php">Investor Page</a><br>
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit <a href="../pages/products/index.php">Product Page</a><br>
            </div>

            <!-- This is the Div where contact us subbmision forms are displayed -->
            <div class="contactUsContent">
                <!-- -->
                contactUsContent
            </div>

            <!-- This is the Div where job application submission forms are displayed -->
            <div class="jobApplicationsContent">
                <!-- -->
                jobApplicationsContent
            </div>
        </div>
    </main>

</body>
</html>