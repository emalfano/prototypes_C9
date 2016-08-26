<!doctype html>
<html>
<head>
</head>
<body>
<?php
	session_start();

if(!empty($_SUCCESS['errors'])){
	$message = $_SUCCESS['errors'];
} else {
	$message = '';
}
?>
<form id="file_upload" enctype="multipart/form-data" action="file_handler.php" method="POST" >
	Select image to upload:
	<input type="file" name="upload_file">
	<input type="text" name="description">
	<button>Submit</button>
	<p id="message"><?=$message?></p>
</form>
</body>
</html>