<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Job</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./css/mainpage_style.css">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Font Awwesome 4 -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="../../js/script.js"></script>
</head>

<body class="jobApplication">

    <form action="jobApplication.php" method="post" onsubmit="return ValidateForm(this);">
        <table class="jobApplication">
            <tr>
                <td>
                    <h1>Apply For Job</h1>
                    <a class="links" href="index.php">< Back</a>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="First_Name"><b>First name *</b></label><br />
                    <input name="First_Name" type="text"  />
                </td>
                <td>
                    <label for="Last_Name"><b>Last name *</b></label><br />
                    <input name="Last_Name" type="text"  />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email_Address"><b>Email *</b></label><br />
                    <input name="Email_Address" type="text"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Portfolio"><b>Portfolio website</b></label><br />
                    <input name="Portfolio" type="text" value="http://"  />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Position"><b>Position you are applying for *</b></label><br />
                    <select name="Position" id="Position">
                        <?php
                            include "../../common/databaseConnect.php";
                            $sql = "SELECT * FROM `jobs`;";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='".$row["title"]."'>".$row["title"]."</option>";
                            }
                            include "../../common/closeDbConn.php";
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Salary"><b>Salary requirements</b></label><br /> <input name="Salary" type="text"  />
                </td>
                <td>
                    <label for="StartDate"><b>When can you start?</b></label><br />
                    <input name="StartDate" type="text"  />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Phone"><b>Phone *</b></label><br />
                    <input name="Phone" type="text"  />
                </td>
                <td>
                    <label for="Fax"><b>Fax</b></label><br />
                    <input name="Fax" type="text"  />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Relocate"><b>Are you willing to relocate?</b></label><br />
                    <input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes
                    <input name="Relocate" type="radio" value="No" /> No
                    <input name="Relocate" type="radio" value="NotSure" /> Not sure
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Organization"><b>Last company you worked for</b></label><br />
                    <input name="Organization" type="text"  />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Reference"><b>Reference / Comments / Questions</b></label><br />
                    <textarea name="Reference" ></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input name="submit" type="submit" value="Send Application" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
    if(isset($_POST["submit"])){
        include "../../common/databaseConnect.php";
        $sql = "SELECT * FROM `jobApplications` WHERE `Email_Address`='".$_POST["Email_Address"]."';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            echo "<script>displayMessage('Aldready Registered.')</script>";
        }
        else{
            $sql = "INSERT INTO `jobApplications` VALUES ('".mysqli_real_escape_string($conn, $_POST["First_Name"])."','".mysqli_real_escape_string($conn, $_POST["Last_Name"])."','".mysqli_real_escape_string($conn, $_POST["Email_Address"])."','".mysqli_real_escape_string($conn, $_POST["Portfolio"])."','".mysqli_real_escape_string($conn, $_POST["Position"])."','".mysqli_real_escape_string($conn, $_POST["Salary"])."','".mysqli_real_escape_string($conn, $_POST["StartDate"])."','".mysqli_real_escape_string($conn, $_POST["Phone"])."','".mysqli_real_escape_string($conn, $_POST["Fax"])."','".mysqli_real_escape_string($conn, $_POST["Relocate"])."','".mysqli_real_escape_string($conn, $_POST["Organization"])."','".mysqli_real_escape_string($conn, $_POST["Reference"])."');";
            if(mysqli_query($conn, $sql)){
                echo "<script>displayMessage('Registered Succesfully.')</script>";
            }
            else{
                echo "<script>displayMessage('Cannot Registered Succesfully. PLease Check Your Form.')</script>";
            }
        }
        include "../../common/closeDbConn.php";
    }
?>