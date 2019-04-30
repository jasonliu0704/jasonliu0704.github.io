<?php
    $to = 'demo@spondonit.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["msg_subject"];

    $fp = fopen("contacts.txt", "a");

    if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
        fwrite($fp, $email." ".$name."\n");
        fflush($fp);            // flush output before releasing the lock
        flock($fp, LOCK_UN);    // release the lock
    }

    fclose($fp);


?>
