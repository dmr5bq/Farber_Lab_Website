<?php

/*
 * This script is called by the Contact page on submitting a message
 * This script is ONLY accessed via AJAX
 * */


require_once "PHPMailer/PHPMailerAutoload.php";
require_once "../Settings.php";

$raw_data = file_get_contents('php://input');

$data = json_decode($raw_data, true);

$name = $data['name'];
$email = $data['email'];
$i_subject = $data['subject'];
$message = $data['message'];

$mailer = new PHPMailer();

init_mailer($mailer);


// will handle mailing to client
$sender = strip_tags($mailer->Username);
$subject = strip_tags("Contact Request from $email");


// add each default message recipient
foreach (Settings::$message_recipients as $rec) {
    $mailer->addAddress(rtrim($rec));
}

$mailer->SetFrom($sender);
$mailer->Subject = "$subject";
$mailer->Body = generate_mail_body($name, $email, $i_subject, $message);
$mailer->send()
    or die($mailer->ErrorInfo);


function init_mailer($mailer) {
    $mailer->IsSMTP(); // telling the class to use SMTP
    $mailer->SMTPAuth = true; // enable SMTP authentication
    $mailer->SMTPSecure = "tls"; // sets tls authentication
    $mailer->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server; or your email service
    $mailer->Port = 587; // set the SMTP port for GMAIL server; or your email server port
    $mailer->Username = "cs4640homework2@gmail.com"; // email username
    $mailer->Password = "8782Dom!!"; // email password
}

function generate_mail_body($name, $email, $subject, $message) {
    return "
    
    Hello,
    
    A message has been sent to you via the lab website with the following information:
    
    Name: $name
    
    Reply Email: $email
    
    Subject: $subject
    
    Message:
    
        $message
    
    
    ";
}