<?php

require_once "../../Settings.php";

$input = file_get_contents('php://input');

$is_assoc = true;

$alum = json_decode($input, $is_assoc);

$first = $alum['first'];
$last = $alum['last'];
$title = $alum['title'];
$category = $alum['category'];

$database = Settings::get_database_connection();

$query = "
    INSERT INTO Alumni (`first`, `last`, `title`, `category`) VALUES ('$first', '$last', '$title', '$category');
";

$database->query($query)
        or die ($database->error);
