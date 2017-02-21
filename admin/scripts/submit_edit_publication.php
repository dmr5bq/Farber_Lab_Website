<?php

require_once "../../Settings.php";

$input = file_get_contents('php://input');

$is_assoc = true;

$pub = json_decode($input, $is_assoc);

$id = $pub['id'];
$t = $pub['title'];
$a = $pub['authors'];
$pi = $pub['published_in'];
$d = $pub['date'];
$y = $pub['year'];

$database = Settings::get_database_connection();

$q = "UPDATE Publications SET 
          title='$t',
          authors='$a',
          published_in='$pi',
          date='$d',
          year='$y'
          
          WHERE id='$id';";

$database->query($q) or die($database->error);
