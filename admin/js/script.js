// This closes all the content divs in admin dashboard
function closeAllContentDivs(){
    $(".summaryContent").hide();
    $(".summaryContent").css("display","none");
    $(".announcementsContent").hide();
    $(".announcementsContent").css("display","none");
    $(".editpageContent").hide();
    $(".editpageContent").css("display","none");
    $(".contactUsContent").hide();
    $(".contactUsContent").css("display","none");
    $(".jobApplicationsContent").hide();
    $(".jobApplicationsContent").css("display","none");
}

// This is called when a user clicks the button
function openContentDiv(whatDivToOpen){
    closeAllContentDivs();
    if(whatDivToOpen == "summaryContent"){
        $(".summaryContent").show();
    }
    if(whatDivToOpen == "announcementsContent"){
        $(".announcementsContent").show();
    }
    if(whatDivToOpen == "editpageContent"){
        $(".editpageContent").show();
    }
    if(whatDivToOpen == "contactUsContent"){
        $(".contactUsContent").show();
    }
    if(whatDivToOpen == "jobApplicationsContent"){
        $(".jobApplicationsContent").show();
    }
}

// When page is loaded fir div is displayed
$(document).ready(function() {
  closeAllContentDivs();
  $(".summaryContent").show();
});


// This sends ajax reuest to loadUsers.php and get the number of users
function showUsers() {
  str = document.getElementById("viewDateOption").value;
  if (str.length == 0) {
    document.getElementById("userTable").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("userTable").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "php/loadUsers.php?q=" + str , true); // Str here is the condition the user provided like today, past year, past month
    xmlhttp.send();
  }
} 

// This sends ajax reuest to loadUsers.php and get the number of Active users
function showActiveUsers() {
  if (str.length == 0) {
    document.getElementById("ActiveUserTable").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ActiveUserTable").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "php/loadActiveUsers.php" , true);
    xmlhttp.send();
  }
}

// Logginout As Admin
function logout(){
  location.href = "logout.php";
}

// Called When A Delete Announcement is Made
function deleteAnnouncement(whichAnnouncement) {
  location.href = 'php/deleteAnnouncement.php?s=' + whichAnnouncement;
}

// Called When A Make Announcement is Made
function makeAnnouncement() {
  $.get("php/makeAnnouncement.php");
  return false;
}


function deleteJobOpening(whichAnnouncement) {
  location.href = 'php/deleteJobOpening.php?s=' + whichAnnouncement;
}