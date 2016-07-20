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
                //Feature Set 3 - Adding the Images
                //1. Make a repeat block to go thru each move,
                //2. get 3rd image from each movie and store in variable
                //3. create an img tag with a src equal to your image variable
                //4. append the img tag to #main
                //Feature Set 4 -Title the Images
                for (var i=0;i < global_result.feed.entry.length; i++){
                    var entry = global_result.feed.entry[i]['im:image'][2].label;
                    var imgTag = $("<img>").attr("src", entry);
                    var title = global_result.feed.entry[i].title.label;
                    var pTag = $('<p>').text(title);
                    $('#main').append(imgTag,pTag);
                }
            }
        });
        console.log('End of click function');
    });
});