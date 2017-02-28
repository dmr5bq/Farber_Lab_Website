<?php

require_once "../../Settings.php";

$input = file_get_contents("php://input");

$id = json_decode($input, true)['id'];

$database = Settings::get_database_connection();

$query = "
    DELETE FROM Alumni WHERE `id`='$id';    
";

$database->query($query)
    or die($database->error);