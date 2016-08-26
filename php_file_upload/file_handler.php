<!-- File Handler -->
<?php
    session_start();
    //feature set 1
    print('<pre>');
    print_r($_FILES);
    print_r($_POST);
    print('</pre>');
    $output = []; // hold output
    $fileName = $_FILES['upload_file']['name'];
    $tmpName = $_FILES['upload_file']['tmp_name'];

    if (!file_exists($tmpName)){
        $output['errors'][] = 'file doesn\'t exist';
        $_SESSION['errors'][] = 'file doesn\'t exist';
    }

    $targetDir = 'uploads/'; //variable to hold target directory
    $targetFile = $targetDir.$fileName;
    print("<br>target filename is $targetFile");

    //feature set 2
    if (file_exists("uploads")){ //check if uploads directory exists
        $path = pathinfo($fileName);
        print_r($path);
        $lcExtension = strtolower($path['extension']);
        print('<br>$lcExtension ' . $lcExtension);

        if ($lcExtension == 'jpeg' || $lcExtension == 'gif' ||
            $lcExtension == 'jpg' || $lcExtension == 'png') {
            print('<br>file type is valid');
            print('<br>getimagesize : ');

            if ($_FILES['upload_file']['size'] <= 2000000) {
                print('<br>file size is a-ok');
                if(move_uploaded_file($tmpName, $targetFile)){ // test to make sure it worked
                    $output['success'] = true;
                    $_SESSION['errors'][] = "File successfully uploaded!";
                }
            } else {
                print('<br>file size is way too big');
                $output['errors'][] = 'file size is way too big';
                $_SESSION['errors'][] = 'file size is way too big';
            }
        } else {
            print('file type is invalid');
            $output['errors'][] = 'File type is invalid';
            $_SESSION['errors'][] = 'File type is invalid';
        }
    } else {
        echo 'directory does not exist';
        $output['errors'][] = 'directory does not exist';
        $_SUCCESS['errors'][] = 'directory does not exist';
    }
    print('<br><br>Messages: ');
    print_r($output);
    
?>