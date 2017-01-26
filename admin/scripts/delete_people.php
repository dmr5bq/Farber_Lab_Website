<?php

require_once "../../Settings.php";

$input = file_get_contents('php://input');

$data = json_decode($input, true);

if (isset($data['first']) && isset($data['last']) && isset($data['email'])) {

    $database = Settings::get_database_connection();

    $email = $data['email'];

    $first = $data['first'];

    $database->query("
        DELETE FROM `TeamMembers` WHERE `email`='$email' AND `first`='$first';
    ");

}