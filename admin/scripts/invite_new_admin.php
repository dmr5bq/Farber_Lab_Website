<?php

require_once "../../scripts/Admin.php";
require_once "../../scripts/PHPMailer/PHPMailerAutoload.php";
require_once "../../Settings.php";

session_start();

$data_str = file_get_contents('php://input');

$data = json_decode($data_str, true);

$first = $data['first'];
$last = $data['last'];
$email = $data['email'];

$mailer = new PHPMailer();

init_mailer($mailer);

$key = get_key_from_current_admin($_SESSION['admin']);

$mailer->addAddress($email);
$mailer->Subject = 'New Administrator Invitation';
$mailer->Body = generate_invitation_email_body($first, $last, $email, $key);

$mailer->send();


function get_key_from_current_admin($admin) {

    $email = $admin->getEmail();

    $database = Settings::get_database_connection();

    $result = $database->query("
        SELECT password FROM Admins WHERE email='$email';
    ");

    return mysqli_fetch_assoc($result)['password'];
}

function generate_invitation_email_body($first, $last, $email, $key) {

    return "
    
    Hello,
    
    You've been invited to join the Farber Lab as an administrator.
    
    Please follow the link below to register as an administrator.
    
    ".generate_invitation_link($first, $last, $email, $key);

}


function init_mailer($mailer) {
    $mailer->IsSMTP(); // telling the class to use SMTP
    $mailer->SMTPAuth = true; // enable SMTP authentication
    $mailer->SMTPSecure = "tls"; // sets tls authentication
    $mailer->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server; or your email service
    $mailer->Port = 587; // set the SMTP port for GMAIL server; or your email server port
    $mailer->Username = "cs4640homework2@gmail.com"; // email username
    $mailer->Password = "8782Dom!!"; // email password
}

function generate_invitation_link($first, $last, $email, $key) {

    $proc = 'http://';

    $domain = 'localhost';

    $subdomain = '/Farber_Lab_Website/admin/';

    $page = 'invitation';

    $query_delim = '?';

    $query_op = '&';

    $query_param_0 = 'first='.$first;

    $query_param_1 = 'last='.$last;

    $query_param_2 = 'email='.$email;

    $query_param_3 = 'key='.$key;

    $query = $query_param_0.$query_op.$query_param_1.$query_op.$query_param_2.$query_op.$query_param_3;

    $path = $proc.$domain.$subdomain.$page;

    return $path.$query_delim.$query;

}