<?php

require_once "../../Settings.php";

$data_str = file_get_contents('php://input');

$data = json_decode($data_str, true);

$email = $data['email'];
$receive_emails = $data['receive_emails'];

switch ($receive_emails) {

    case '1':
        $val = true;
        break;

    case '0':
        $val = false;
        break;

}

$current_recipients = json_decode(file_get_contents('../../data/admin/email_recipients.txt'), true);

$in_recipients = false;

foreach($current_recipients as $recipient) {
    if ( strcmp($recipient, $email) == 0 ) {
        $in_recipients = true;
    }
}

$result = array();

if ($val && ! $in_recipients)
    Settings::$message_recipients[] = $email;
else if (!$val && $in_recipients) {
    $new_recipients = array();

    foreach ($current_recipients as $recipient) {
        if (strcmp($recipient, $email) != 0) {
            $new_recipients[] = $recipient;
        }
    }
    Settings::$message_recipients = $new_recipients;
}

foreach (Settings::$message_recipients as $recipient) echo $recipient . ' ';

$file = fopen('../../data/admin/email_recipients.txt', 'w');

$output = array();

foreach (Settings::$message_recipients as $recipient)
    $output[] = $recipient;

fwrite($file, json_encode($output));

fclose($file);
