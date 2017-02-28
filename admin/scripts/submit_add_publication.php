<?php

require_once "../../Settings.php";

$input = file_get_contents('php://input');

$is_assoc = true;

$pub = json_decode($input, $is_assoc);

$database = Settings::get_database_connection();

$title = $pub['title'];
$authors = $pub['authors'];
$published_in = $pub['published_in'];
$date = $pub['date'];
$year = $pub['year'];
$link = $pub['link'];

$query = "
    INSERT INTO Publications (`title`,  `authors`,  `published_in`, 
                              `date`,   `year`,     `link`) 
                              VALUES
                              ('$title', '$authors',  '$published_in', 
                              '$date',   '$year',     '$link');
";

$database->query($query)
    or die($database->error);