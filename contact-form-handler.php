<?php

    if(isset($_POST['sendbutton'])){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['subject'];

        $email_subject = "PORTFOLIO Form Submission";

        $to = "rameshpr@umich.edu";
        mail($to,$email_subject,$message,$visitor_email);
    }

    /*$email_from = 'pran.v.2020@gmail.com';


    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";*/

    
    /*$headers = "From $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");*/
?>