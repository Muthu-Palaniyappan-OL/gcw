
$(document).ready(function() {
    $("#nav_slideDown").hide();
    
    ////////////////////////////////////////////////////////////////////////////
    // JavaScript JQuery code for loading animmation on the start of the page.//
    ////////////////////////////////////////////////////////////////////////////
    if(Cookies.get('numberofvisits')==undefined){
        $(".logo_loading_things").css("visibility", "visible");
        $(".logo_loading_things").fadeIn(2000);
        $(".logo_loading_things").fadeOut(2000);
        console.log("HI");
        Cookies.set('numberofvisits', 1);
    }
    else{
        $(".logo_loading_things").hide();
    }
    ////////////////////////////////////////////////////////////////////////////
    
});

////////////////////////////////////////////////////////////////////////////////
//                               Menu Button                                  //
////////////////////////////////////////////////////////////////////////////////

// Starts to fun when menu button is clicked
function openNav() {
    $("#nav_slideDown").show();
    $("#nav_slideDown").animate({height:"100%"},600);
}

// Starts to fun when close button is clicked
function closeNav(){
    $("#nav_slideDown").animate({height:0},600);
    setTimeout(function(){
        $("#nav_slideDown").hide();
    }, 600);
}

////////////////////////////////////////////////////////////////////////////////