<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'kamiel.prive@gmail.com';

    $email_subject = "Contact Status Website voor FiveM RolePlay";

    $email_body = "Naam: $name.\n".
                  "Email: $visitor_email.\n".
                  "Bericht: $message.\n";


    $to = "kamiel.prive@gmail.com";

    $headers = "Van: $email_from \r\n;
    
    $headers .= "Antwoord: $visitors_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: contact.html")

?>