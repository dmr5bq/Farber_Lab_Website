<?php

require_once "../../Settings.php";

$database = Settings::get_database_connection();

$result = $database->query("
    SELECT * FROM Publications WHERE 1;
");

$output = [];

while ($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
}

echo json_encode($output);