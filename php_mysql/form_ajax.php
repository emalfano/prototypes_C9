<!doctype html>
<html>
<head>
    <title>Ajax call</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<body>
<form>
    <input name="howdy" type="checkbox" value="howdy">
    <textarea name="someText"></textarea>
    <button onclick="getData()">Get the stuff</button>
</form>
<form>
    <input id="user" name="user" type="text" placeholder="User id">
    <input id="title" name="title" type="text" placeholder="Title">
    <input id="details" name="details" type="text" placeholder="Details">
    <input id="date" name="date" type="date">
    <input id="notes" name="notes" type="text" placeholder="Notes">
    <input type="submit" onclick="getData()">
</form>
<script>
    var getData = function(){
        console.log('the function getData has been called');
        $.ajax({
            url: "index_insert.php",
            method: "POST",
            data: {'user': $('#user').val(), 'title': $('#title').val(), 'details': $('#details').val(),
                'date': $('#date').val(), 'notes': $('#notes').val()},
            dataType:'text',
            success: function(response){
                console.log('response ', response);
            }
        });
    };
</script>
</body>
</html>