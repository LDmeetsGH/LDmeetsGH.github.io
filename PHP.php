<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'lars.donart@freenet.de';

    $email_sbuject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "lars.donart@googlemail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email,$email_body,$headers);

    header("Location: index.html");
    
?>
    <Location "/">
    AllowMethods GET POST OPTIONS
  </Location>
