<?php

require_once "../Settings.php";

$file = fopen('../data/admin/email_recipients.txt', 'w');

$output = array();

foreach (Settings::$message_recipients as $recipient)
    $output[] = $recipient;

fwrite($file, json_encode($output));

fclose($file);
