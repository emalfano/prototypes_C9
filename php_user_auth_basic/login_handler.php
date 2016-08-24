<!--login_handler.php-->
<?php
session_start();
$user_info = [
    ['id'=> 1, 'username'=>'beth', 'password' => 'fluffybunnies'],
    ['id'=> 2, 'username'=>'meg', 'password' => 'shakeandbake'],
    ['id'=> 3, 'username'=>'jo', 'password' => '12345'],
    ['id'=> 4, 'username'=>'amy', 'password' => 'supergoodpassword'],
    ['id'=> 5, 'username'=>'professor bear', 'password' => 'ilovejo']
];

$username = $_POST['username'];
$password = $_POST['password'];

foreach ($user_info as $user){  // loop through users
    if($username == $user['username']){ // found user
        print('found user');
        print_r($user);
        if ($password == $user['password']){ // does password match?
            print('password matches');
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['message'] = 'You are now logged in!';
            break;
        }
    } else {
        continue;
    }
    $_SESSION['message'] = 'Your username OR password is incorrect!';
    print('Your username or pw is incorrect');
}
?>