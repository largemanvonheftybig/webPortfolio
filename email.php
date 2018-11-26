<?php
    if(isset($_POST["submit"]))
    {
        $to = "oek8462@rit.edu";
        
        $from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);

        $subject = "Portfolio";

        $message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);

        $name = empty(trim($_POST["name"])) ? "No name" : sanitize_string($_POST["name"]);

        

        $headers = "From: $from" . "\r\n";
    
        

        $sent = mail($to,$subject,$message,$headers);
        if ($sent){
            echo "<p><b>You sent:</b> $message</p>";
            echo "press back to return to the page...";
        }
        else{
            echo "<p>Mail not sent!</p>";
        }
    }
    
    
        
        function sanitize_string($string){
            $string = trim($string);
            $string = strip_tags($string);
            return $string;
    }
?>  