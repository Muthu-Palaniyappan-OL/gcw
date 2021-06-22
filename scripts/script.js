
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

//This function is for closing the succesful subscribing button
function closeSubscribe(){
    $(".greycover").css("visibility","hidden");
    $(".thank_you_for_subscribing").css("visibility","hidden");
}

//This function starts after email passes php verification
function doneSubscribe(){
    $(".greycover").css("visibility","visible");
    $(".thank_you_for_subscribing").css("visibility","visible");
}

//Focus the exmail box which is near subscribe button after the php email validation
function redTheEmailBox(){
    $("#email_newsletter").css("border","3px solid red");
    alert("Invalid Email!");
    $("#email_newsletter").focus();
}
////////////////////////////////////////////////////////////////////////////////