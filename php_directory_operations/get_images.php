<?php
//    get a directory listing of images
    $dirList = glob("images/*");
    // feature set 2 -- make an assoc array
    $output = [ 'success' => '', 'error' => '', 'files' => $dirList ];
    print(json_encode($output));
?>