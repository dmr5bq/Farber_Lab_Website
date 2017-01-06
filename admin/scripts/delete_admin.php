<?php

require_once "../../Settings.php";

$email = rtrim(file_get_contents('php://input'));

echo $email;

$database = Settings::get_database_connection();

$result = $database->query("
    
    DELETE FROM Admins WHERE email=$email;
    
");



