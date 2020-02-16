<?php
    var_dump($_POST['name']);
    var_dump($_POST['name']);
    var_dump($_POST['email']);
    var_dump($_POST['phone']);
    var_dump($_POST['massage']);
    $to = 'tropical10tafhim@gmail.com';
    $subject='this is from website';
    $text='hello world';
    $header='From: website';
    mail($to,$subject,$text,$header);
    header('Location:http://'.$_SERVER["HTTP_HOST"].'/contact-us.php');
    
    // https://www.youtube.com/watch?v=4q0gYjAVonI
?>