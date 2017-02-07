<?php

require_once "../../Settings.php";
require_once "../../scripts/TeamMember.php";
require_once "../../scripts/Alumni.php";

$input = file_get_contents("php://input");

$is_assoc = true;

$assoc_data = json_decode($input, $is_assoc);

// 1. Pull necessary record information to create a new Alumni

$id = $assoc_data['id'];
$first = $assoc_data['first'];
$last = $assoc_data['last'];
$email = $assoc_data['email'];
$title = $assoc_data['title'];
$category = $assoc_data['category'];

// 2. Delete TeamMember record from the database

$database = Settings::get_database_connection();

$database -> query("
    DELETE FROM TeamMembers WHERE id='$id';
");

// 3. Add new Alumni record to database

$alumni = Alumni::create_alumni(
    $first,
    $last,
    $title,
    $category == 'students' ? 'gr' : '');

$alumni->store();