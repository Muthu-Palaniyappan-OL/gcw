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

function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "gethint.php?q=" + str, true);
      xmlhttp.send();
    }
  }  