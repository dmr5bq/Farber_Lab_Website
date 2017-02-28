<?php

require_once "../../Settings.php";

$database = Settings::get_database_connection();

$sql_result = $database->query("
        SELECT * FROM Alumni WHERE 1;
");

$output = [];

while($row = mysqli_fetch_assoc( $sql_result ) ) {
    $output[] = $row;
}

echo json_encode($output);