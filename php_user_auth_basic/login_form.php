<!--login_form.php-->
<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
</head>
<body>
<?php
session_start();

if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
} else {
    $message = '';
}
?>
Login: <input name="username" id="username" placeholder="Username">
<input name="password" id="password" placeholder="Password">
<input type="submit" value="Submit" onclick="loginHandler()" >
<p id="message"><?=$message?></p>

<script>
    var loginHandler = function(){
        console.log('the function loginHandler has been called');
        $.ajax({
            url: "login_handler.php",
            method: "POST",
            data: {'username': $('#username').val(), 'password': $('#password').val()},
            dataType:'text',
            cache: false,
            success: function(response){
                console.log('Call success ', response);
            },
            error: function(response){
                console.log('Call fail ', response);
            }
        });

    };
</script>
</body>
</html>