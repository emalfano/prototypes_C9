<?php
session_start();

$output = [];
$user_info = [
    ['id'=> 1, 'username'=>'beth', 'password' => '2beb0192eb1ca5a8756bc89a09b93036e1854049'], //fluffybunnies
    ['id'=> 2, 'username'=>'meg', 'password' => '75510278cc01da664793802ac6fd1e0c9c14d08d'], //shakeandbake
    ['id'=> 3, 'username'=>'jo', 'password' => '75510278cc01da664793802ac6fd1e0c9c14d08d'],
    ['id'=> 4, 'username'=>'amy', 'password' => '75510278cc01da664793802ac6fd1e0c9c14d08d'],
    ['id'=> 5, 'username'=>'professor bear', 'password' => '75510278cc01da664793802ac6fd1e0c9c14d08d']
];

$username = $_POST['username'];
$password = $_POST['password'];

foreach ($user_info as $user){  // loop through users
    if($username == $user['username']){ // found user
        if (sha1($password) == $user['password']){ // does password match?
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['message'] = 'You are now logged in!';
            $output = [ 'user_id' => $user['id'], 'success' => 'true', 'message' => 'You are now logged in!' ];
            $output_string = json_encode($output);
            print($output_string);
            break;
        }
    } else {
        continue;
    }
    $_SESSION['message'] = 'Your username OR password is incorrect!';
    $output = [ 'success' => 'false', 'message' => 'Your username OR password is incorrect!'];
    $output_string = json_encode($output);
    print($output_string);
//    print('Your username or pw is incorrect');
}
?>