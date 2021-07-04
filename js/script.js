
$(document).ready(function() {
    //Hide the slide down
    $("#nav_slideDown").hide();
});

////////////////////////////////////////////////////////////////////////////////
//                               Menu Button                                  //
////////////////////////////////////////////////////////////////////////////////

// Starts to fun when menu button is clicked
function openNav() {
    $("#nav_slideDown").show();
    $("#nav_slideDown_ul").css("visibility","visible");
    $("#nav_slideDown").animate({height:"100%"},600);
}

// Starts to fun when close button is clicked
function closeNav(){
    $("#nav_slideDown").animate({height:0},600);
    setTimeout(function(){
        $("#nav_slideDown_ul").css("visibility","hidden");
        $("#nav_slideDown").hide();
    }, 600);
}

//Focus the exmail box which is near subscribe button after the php email validation
function redTheEmailBox(){
    $("#email_newsletter").css("border","3px solid red");
    alert("Invalid Email!");
    $("#email_newsletter").focus();
}

// Function Used To Display Message
function displayMessage(string){
    $("body").after('<div class="greyCoverOverTheMain"><div class="messageBox"><div class="messageBoxClose" onclick="closeMessage()"><i class="fa fa-times" aria-hidden="true"></i></div><span class="messageBoxMsg"></span></div></div>');
    $(".greyCoverOverTheMain").css("visibility","visible");
    $(".messageBox").css("visibility","visible");
    $(".messageBoxMsg").html(string);
}

// Function Called When Message Box Needs to be closed
function closeMessage(string){
    $(".greyCoverOverTheMain").css("visibility","hidden");
    $(".messageBox").css("visibility","hidden");
}
////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////
//                               Menu Button                                  //
////////////////////////////////////////////////////////////////////////////////

function updateHiddenInput(name){
    if(name=="landingpage"){
        name="abtUs";
        $("#" + name).val($("#P"+name).html().trim());
    }
    if(name=="aboutUs"){
        name="abtUs";
        $("#" + name).val($("#P"+name).html().trim());
        name="Hist";
        $("#" + name).val($("#P"+name).html().trim());
    }
}
////////////////////////////////////////////////////////////////////////////////