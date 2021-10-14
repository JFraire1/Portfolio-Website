<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "Jose.Fraire@student.csulb.edu";
    $headers = "From: Website Email From ".$mailFrom;
    $txt = "You got an email from ".$name.". \n\n".$message;

    if(mail($mailTo, $subject, $txt, $headers)){
        header('Location: /~026422862/');
        exit;
    }
    else {
        echo "The email($email_subject) was NOT sent.";
        echo "Currently Working With System Admin to Resolve The Issue, Please Email Me Directly, For Now";
        exit;
    }

}