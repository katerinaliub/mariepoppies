<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];
    $email_subject = $_Post['subject'];

    $email_body = "Nom: $name.\n".
                  "E-mail: $visitor_email.\n".
                  "Message: $message.\n";

    $to = "katerina.holodna@gmail.com";
    $headers = "From: $visitor_email \r\n";
    $headers.= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>
