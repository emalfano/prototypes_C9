// Answer the questions here:

// - What do you think is going to happen?
// - "Delegated Button #5 handler" will log to console

// - What happened?
// - "Delegated Button #5 handler" will log to console
// - Why?
// - Because the button was added to the #list children and the event was handled by the same handler as the first 4 children
//========== Write your code below ===========//
//Feature Set 1 - The lonely event listener
$(document).ready(function () {
    $("#list").on("click", 'button', function () {      //targets the list id buttons
        console.log($(this).text());                    //logs out the button text node that was clicked
    });

    //Feature Set 2 - bring a friend
    var  delegatedButton = $("<button>").css("margin", "10px").css("background-color", "lavender").text("Delegated Button #5 handler");
    var li = $('<li>');
    var ul = $('#list');
    li.append(delegatedButton);
    ul.append(li);

    //Feature Set 3 - Now it's a party!


});
