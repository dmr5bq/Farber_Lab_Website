<?php

require_once "../../Settings.php";

$input = file_get_contents('php://input');

$is_assoc = true;

$alum = json_decode($input, $is_assoc);

$id = $alum['id'];
$first = $alum['first'];
$last = $alum['last'];
$title = $alum['title'];
$category = $alum['category'];

$database = Settings::get_database_connection();

$query = "
    UPDATE Alumni SET `first`='$first', `last`='$last', `title`='$title', `category`='$category' WHERE `id`=$id;
";

$database->query($query)
    or die ($database->error);
