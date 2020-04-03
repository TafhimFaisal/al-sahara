<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

if (isset($_FILES) && (bool) $_FILES) {

    $allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png", "txt");

    $files = array();
    foreach ($_FILES as $name => $file) {
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if (!in_array($ext, $allowedExtensions)) {
            die("File $file_name has the extensions $ext which is not allowed");
        }
        array_push($files, $file);
    }


    $to = $_POST['email'];
    $from = "questions@krishnarathor.com";  //your website email type here
    $subject = "Email attachment tutorial";
    $message = $_POST['msg'];
    $headers = "From: $from";
    
    
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    
    
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";
    
    
    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }

    var_dump($message);
    die();
    // send

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        echo "<p style='tex-align:center'>mail sent to $to!</p>";
    } else {
        echo "<p>mail could not be sent!</p>";
    }
}
?>
<!-- https://rathorji.in/lp/149 -->
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data" class="attachment-form">
            <h3>Email with attachment</h3>
            <p>We will not store your email to our database you can test to type your email id at here</p>
            <input type="email" name="email" placeholder="email"/><br>
            <textarea name="msg" placeholder="Message"></textarea><br>
            attach file<br>
            <input type="file" name="attach1"/><br>
            <input type="submit" value="Send"/>
        </form>
     

    </body>
</html>

