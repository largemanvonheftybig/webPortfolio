<?php
    if(isset($_POST["submit"]))
    {
        $to = "oek8462@rit.edu";
        
        $from = empty(trim($_POST["recipient-email"])) ? "noemail@sample.com" : sanitize_string($_POST["recipient-email"]);

        $subject = "Portfolio";

        $message = empty(trim($_POST["message-text"])) ?  "No message" : sanitize_string($_POST["message-text"]);

        $name = empty(trim($_POST["recipient-name"])) ? "No name" : sanitize_string($_POST["recipient-name"]);
        
        $human = empty(trim($_POST["human"])) ? "0" : sanitize_string($_POST["human"]);

        $headers = "From: $from" . "\r\n";
        if (intval($human) == 4){

        $sent = mail($to,$subject,$message,$headers);
        }
        
    }
    ?>