<?php

    // $to = 'Info@sahara-uae.com';
    $to = '2195a43808-f86dbb@inbox.mailtrap.io';
    $subject = 'sahara-uae';
    $text  = 'Name: '.$_POST['name'].' '.'Phone:'.$_POST['phone'].' Massage : '.$_POST['massage'];
    $header= $_POST['email'];

    mail($to,$subject,$text,$header);
    header('Location:http://'.$_SERVER["HTTP_HOST"].'/contact-us.php');
    
    // https://www.youtube.com/watch?v=4q0gYjAVonI
    //https://www.youtube.com/watch?v=No8gaqsFdMw
?>