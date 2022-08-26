<?php

    if (isset($_POST['submit'])) {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $message = $_POST['message'];

        $mailTo = "tesutoakauntogm@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$fullName.".\n\nPhone Number : .".$phoneNumber."\n\n".$message;

        header("Location: ../index.html?mailsend");
        mail($mailTo, $txt, $headers);
        
    }
?>