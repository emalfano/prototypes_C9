<!doctype html>
<html>
<head>
    <title>PHP Directory Ops</title>
    <meta name="description" content="This prototype is an introduction to directory operations in PHP.">
    <meta name="keywords" content="PHP, file system, servers, backend">
    <meta name="author" content="Elizabeth Alfano">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
<div id="image_container">
<?php
//    get a directory listing of images
    $dirList = glob("images/*");
    foreach($dirList as $image){
?>
        <img src="<?=$image;?>">

<?php
     }
?>

</div>
</body>
</html>