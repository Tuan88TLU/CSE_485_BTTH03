<?php
include("BT1/EmailServerInterface.php");
include("BT1/EmailSender.php");
include("BT1/MyEmailSender.php");
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("example@example.com", "Test Email", "This is a test email.");
?>