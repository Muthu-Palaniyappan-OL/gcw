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
        <aside>
            <button onclick="openContentDiv('summaryContent');">Summary</button>
            <button onclick="openContentDiv('announcementsContent');">Announcements</button>
            <button onclick="openContentDiv('editpageContent');">Edit Pages</button>
            <button onclick="openContentDiv('contactUsContent');">Contactus Submissions</button>
            <button onclick="openContentDiv('jobApplicationsContent');">Job Applications</button>
        </aside>
        <div class="mainDetailsContent">
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

                <table id="userTable">
                    <script>
                        showUsers();
                        setInterval(function(){showUsers();},1000);
                    </script>
                </table>
                
                <br><hr>
                
                <h3>Active Users</h3>

                <br>

                <table id="ActiveUserTable">
                    <script>
                        showActiveUsers();
                        setInterval(function(){showActiveUsers();},1000);
                    </script>
                </table>
                
                <hr>
            </div>
            <div class="announcementsContent">
                <!-- -->
                announcementsContent
            </div>
            <div class="editpageContent">
                <!-- -->
                editpageContent
            </div>
            <div class="contactUsContent">
                <!-- -->
                contactUsContent
            </div>
            <div class="jobApplicationsContent">
                <!-- -->
                jobApplicationsContent
            </div>
        </div>
    </main>

</body>
</html>