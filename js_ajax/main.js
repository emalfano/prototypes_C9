//Create GLOBAL variable below here on line 2
var global_result;

$(document).ready(function(){
    $('button').click(function(){
        console.log('click initiated');
        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {
                console.log('AJAX Success function called, with the following result:', result);
                global_result = result;
                //Feature Set 2 - Exploring for images
                //variable to hold the 3rd image of the first movie
                var first_movie_info = global_result.feed.entry[0]['im:image'][2].label;

                console.log('first_movie_info : ', first_movie_info);
            }
        });
        console.log('End of click function');
        //feature set 2 - exploring for imges

    });
});