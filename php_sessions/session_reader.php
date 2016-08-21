<!-- Session Reader -->
<?php
    session_start();
    if(!empty($_SESSION['errors']['name']) ||
        !empty($_SESSION['errors']['age']) ||
        !empty($_SESSION['errors']['occupation'])){
       unset($_SESSION['errors']);
    }

    if (preg_match('/[0-9]/', $_GET['name'],$match)){
        $_SESSION['errors']['name'] = 'Name is invalid';
        header('location: session_setter.php');
    }
    if ($_GET['age'] > 200 || preg_match('/\D/', $_GET['age'],$match)){
        $_SESSION['errors']['age'] = 'Age is invalid';
        header('location: session_setter.php');
    }
    if (preg_match('/^[0-9]/', $_GET['occupation'],$match)){
        $_SESSION['errors']['occupation'] = 'Occupation is invalid';
        header('location: session_setter.php');
    }
   
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['age'] = $_GET['age'];
    $_SESSION['occupation'] = $_GET['occupation'];

    print('Name ' . $_SESSION['name'] . '<br>');
    print('Age ' . $_SESSION['age']. '<br>');
    print('Occupation ' . $_SESSION['occupation']. '<br>');
?>

