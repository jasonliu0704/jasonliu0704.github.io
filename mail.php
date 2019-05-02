<?php
    $to = 'demo@spondonit.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];

    $fp = fopen("contacts.txt", "a");

    //if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    fwrite($fp, $email." ".$name." ".$message."\n");
    fflush($fp);            // flush output before releasing the lock
        //flock($fp, LOCK_UN);    // release the lock
    //}
    echo "thanks for your subscription";

    fclose($fp);


?>
