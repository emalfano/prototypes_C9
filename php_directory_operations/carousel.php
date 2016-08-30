<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div id="imageContainer" style="height:612px; width: 832px;"></div>
    <button style="position:relative; top:20px; margin-left: 5px;" onclick="prev_image()">previous</button>
    <button style="position:relative; top:20px;"onclick="next_image()">next</button>

<script>
    var image_array = [];
    var display_image = 0;
    var load_files = function(){
        $.ajax({
            url: 'get_images.php',
            method: 'get',
            dataType: 'json',
            success: function(response){
                console.log("success ",response);
                image_array = response.files;
                console.log('array ',image_array);

                var imgElement = $('<img>');
                var divElement =$('<div>');
                imgElement.css({
                    'position': 'absolute',
                    'left' : '0',
                    'top' : '0',
                    'width' : '100%'})
                    .attr('src', image_array[0]);
                console.log('loop ',image_array[0]);
                console.log('imgElement 0' ,imgElement);
                divElement.append(imgElement);
                console.log('divElement',divElement);
                $('body').append(divElement);

//                for (var i = 0; i < image_array.length; i++){
//                    var imgElement = $('<img>');
//                    var divElement =$('<div>');
//                    imgElement.css({
//                        'position': 'absolute',
//                        'left' : '0',
//                        'top' : '0',
//                        'width' : '100%'})
//                        .attr('src', image_array[i]);
//                    console.log('loop ',image_array[i]);
//                    console.log('imgElement ' +i,imgElement);
//                    divElement.append(imgElement);
//                    console.log('divElement',divElement);
//                    $('body').append(divElement);
//                }

            },
            error: function(response) {
                console.log("error ", response);
            }
        });

    };

    var prev_image = function(){
        if (display_image>=1){
            display_image -= 1;
        } else {
            display_image = image_array.length-1;
        }
        var imgElement =  $('<img>');
        imgElement.css({
            'position': 'absolute',
            'left' : '0',
            'top' : '0',
            'width' : '100%'})
            .attr('src', image_array[display_image]);
        console.log(image_array[display_image])
        $('body').append(imgElement);
        console.log('prev_image clicked');
    };

    var next_image = function(){
        if (display_image <= image_array.length-2){
            display_image += 1;
        } else {
            display_image = 0;
        }
        var imgElement =  $('<img>');
        imgElement.css({
            'position': 'absolute',
            'left' : '0',
            'top' : '0',
            'width' : '100%'})
            .attr('src', image_array[display_image]);
        console.log(image_array[display_image])
        $('body').append(imgElement);
        console.log('prev_image clicked');
    };

    load_files();
</script>
</body>
</html>