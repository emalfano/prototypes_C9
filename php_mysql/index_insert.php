<!-- index_insert.php -->
<?php
require_once('mysql_connect.php');
print_r($_POST['user']);
$user = $_POST['user'];
print_r($_POST['title']);
$title = $_POST['title'];
print_r($_POST['details']);
$details = $_POST['details'];
print_r($_POST['date']);
$date = $_POST['date'];
print_r($_POST['notes']);
$query = "INSERT INTO `todo_items` (`title`, `details`, `user_id`, `timestamp`)
      VALUES ('$title', '$details', '$user', '$date')";
$result = mysqli_query($conn, $query);
print('affected rows '.mysqli_affected_rows($conn));
if(mysqli_affected_rows($conn) > 0) {
    print('<br>table updated!');
}elseif (mysqli_affected_rows($conn) == -1){
    print('bad query : '. mysqli_error($conn));
} else {
    print('<br>table not updated! try again');
}
?>

