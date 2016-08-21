<!-- Session Setter -->
<?php
session_start();

if(!empty($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = '';
}
if(!empty($_SESSION['age'])) {
    $age = $_SESSION['age'];
} else {
    $age = '';
}
if(!empty($_SESSION['occupation'])) {
    $occupation = $_SESSION['occupation'];
} else {
    $occupation = '';
}

?>
<form action="session_reader.php">
    <input name="name" value="<?=$name?>" placeholder="Name"><br>
    <?php
    if(!empty($_SESSION['errors']['name'])){
            print_r($_SESSION['errors']['name'] . '<br>');
    }
    ?>
    <input name="age" value="<?=$age?>" placeholder="Age"><br>
    <?php
    if(!empty($_SESSION['errors']['age'])){
        print_r($_SESSION['errors']['age'] . '<br>');
    }
    ?>
    <input name="occupation" value="<?=$occupation?>" placeholder="Occupation"><br>
    <?php
    if(!empty($_SESSION['errors']['occupation'])){
        print_r($_SESSION['errors']['occupation'] . '<br>');
    }
    ?>
    <button>Submit</button>
</form>
