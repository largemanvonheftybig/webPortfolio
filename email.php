<?php
    if(isset($_POST["submit"]))
    {
        $to = "oek8462@g.rit.edu";
        
        $from = empty(trim($_POST["recipient-email"])) ? "noemail@sample.com" : sanitize_string($_POST["recipient-email"]);

        $subject = "Portfolio";

        $message = empty(trim($_POST["message-text"])) ?  "No message" : sanitize_string($_POST["message-text"]);

        $name = empty(trim($_POST["recipient-name"])) ? "No name" : sanitize_string($_POST["recipient-name"]);

        $sent = mail($to,$subject,$message,$headers);
        if ($sent){
            echo "<p><b>You sent:</b> $message</p>";
        }else{
            echo "<p>Mail not sent!</p>";
        }
    }
    ?>