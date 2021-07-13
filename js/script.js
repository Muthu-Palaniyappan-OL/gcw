
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
//                             Updating Hidden Input                          //
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
    if(name=="investor"){
        name="invInfo";
        $("#" + name).val($("#P"+name).html().trim());
    }
    if(name=="products"){
        name="product1";
        $("#" + name).val($("#P"+name).html().trim());
        name="product2";
        $("#" + name).val($("#P"+name).html().trim());
        name="product3";
        console.log(name);
        $("#" + name).val($("#P"+name).html().trim());
    }
}
////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////
//                                  Job Application                           //
////////////////////////////////////////////////////////////////////////////////

function ValidateForm(frm) {
    if (frm.First_Name.value == "") {
        alert('First name is required.');
        frm.First_Name.focus();
        return false;
    }
    if (frm.Last_Name.value == "") {
        alert('Last name is required.');
        frm.Last_Name.focus();
        return false;
    }
    if (frm.Email_Address.value == "") {
        alert('Email address is required.');
        frm.Email_Address.focus();
        return false;
    }
    if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) {
        alert('Please enter a valid email address.');
        frm.Email_Address.focus();
        return false;
    }
    if (frm.Position.value == "") {
        alert('Position is required.');
        frm.Position.focus();
        return false;
    }
    if (frm.Phone.value == "") {
        alert('Phone is required.');
        frm.Phone.focus();
        return false;
    }
    return true;
}
////////////////////////////////////////////////////////////////////////////////