<?php 

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sandidi77lognes@yahoo.fr';
    $email_subject = "Nouveau message ! ;)";
    $email_body = "Nom du visiteur: $name.\n".
                    "Email du visiteur: $visitor_email.\n".
                        "Message du visiteur: $message.\n";

    $to = "segrais-sandy-k@hotmail.fr";
    $headers = "From : $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
    echo $thankYou="<p>Thank you!</p>";
?>