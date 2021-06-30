function closeAllContentDivs(){
    $(".summaryContent").hide();
    $(".announcementsContent").hide();
    $(".editpageContent").hide();
    $(".contactUsContent").hide();
    $(".jobApplicationsContent").hide();
}

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


$(document).ready(function() {
    closeAllContentDivs();
    $(".summaryContent").show();
});

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
    xmlhttp.open("GET", "php/loadUsers.php?q=" + str , true);
    xmlhttp.send();
  }
} 

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