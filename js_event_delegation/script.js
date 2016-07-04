// Answer the questions here:

// - What do you think is going to happen?
// - Nothing will log to console
// - What happened?
// - Nothing was logged to console
// - Why?
// - Because the button was added to the #list children and the event was not handled by the handler in feature set 1. Only the first 4 children are being logged.
//========== Write your code below ===========//
//Feature Set 1 - The lonely event listener
$(document).ready(function () {
    $("#list button").on("click", function () {      //targets the list id buttons
        console.log($(this).text());                    //logs out the button text node that was clicked
    });

    //Feature Set 2 - bring a friend
    var  delegatedButton = $("<button>").css("margin", "10px").css("background-color", "lavender").text("Delegated Button #5 handler");
    var li = $('<li>');
    var ul = $('#list');
    li.append(delegatedButton);
    ul.append(li);

    //Feature Set 3 - Now it's a party!
    // create a delegated event handler that will successfully console.log every new button added to the #list element

    $("#list").delegate("button", "click", function(){
        console.log($(this).text(),"logged by new event handler");
    });

    //Additional challenge - new button that opens a new tab and navigates to google.com
    var  goGoogleButton = $("<button>").css("margin", "10px").css("background-color", "#00BFFF").text("Go Google");
    var container = $('#container');
    var a = $("<a>").attr("target","_blank").attr("href","http://www.google.com");
    li = $('<li>');
    ul = $('#list');
    a.append(goGoogleButton);
    li.append(a);
    ul.append(li);
});
