<?php

require_once '../../Settings.php';

$input = file_get_contents('php://input');

$is_assoc = true;

$data = json_decode($input, $is_assoc);

$first = $data['first'];
$last = $data['last'];
$email = $data['email'];
$title = $data['title'];
$category = $data['category'];

$database = Settings::get_database_connection();

$database->query("
    INSERT INTO TeamMembers (first, last, email, title, category, has_image) VALUES ('$first', '$last', '$email', '$title', '$category', 0);
");

echo $input;