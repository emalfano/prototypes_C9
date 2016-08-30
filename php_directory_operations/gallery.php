<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="imageContainer"></div>
<script>
    $(document).ready(function(){
        $('img').on("click",function(){
            $(this).modal("toggle");
            $(this).css("width","100%");
        });
    });
    var arrayFiles = [];
    var load_files = function(){
        $.ajax({
            url: 'get_images.php',
            method: 'get',
            dataType: 'json',
            success: function(response){
                console.log("success ",response);
                arrayFiles = response.files;
                console.log('array ',arrayFiles);

                for (var i = 0; i < arrayFiles.length; i++){
                    var imgElement = $('<img>');
                    var divElement =$('<div>');
                    imgElement.css('width','25%').attr('src',arrayFiles[i]);
                    console.log('loop ',arrayFiles[i]);
                    console.log('imgElement ' +i,imgElement);
                    divElement.append(imgElement);
//                    divElement.append(imgElement);
                    console.log('divElement',divElement);
                    $('body').append(divElement);
                }

            },
            error: function(response) {
                console.log("error ", response);
            }
        });

    };

    load_files();

</script>
</body>
</html>