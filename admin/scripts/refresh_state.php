<?php

require_once "../../Settings.php";
require_once "../../scripts/Admin.php";

$str_data = file_get_contents('php://input');

$array_data = json_decode($str_data, true);


$current_admin = fetch_admin_by_email($array_data['admin_email']);

$output = array();

$output['admin_email'] = $current_admin->getEmail();

$output['admin_first'] = $current_admin->getFirst();

$output['admin_last'] = $current_admin->getLast();

echo json_encode($output);



function fetch_admin_by_email($email) {
    $database = Settings::get_database_connection();

    $result = $database->query("
        
        SELECT * FROM Admins WHERE email='$email';
        
    ");

    $output = array();

    while ($i = mysqli_fetch_assoc($result)) {
        $output[] = $i;

        return Admin::create_admin($i['first'], $i['last'], $i['email'], $i['password']);
    }

}