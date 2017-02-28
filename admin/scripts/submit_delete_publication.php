<?php

require_once "../../Settings.php";



$id = file_get_contents('php://input');

$database = Settings::get_database_connection();

$query = "
        DELETE FROM Publications WHERE `id`='$id';
";

$database->query($query) or die($database->error);
