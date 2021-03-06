<?php

require_once "../../Settings.php";
require_once "../../scripts/Admin.php";

session_start();

$str_data = file_get_contents('php://input');

$array_data = json_decode($str_data, true);

$old_email = rtrim($array_data['email']);
$new_first = rtrim($array_data['new_first']);
$new_last = rtrim($array_data['new_last']);

$admin = $_SESSION['admin'];

$admin->setFirst($new_first);
$admin->setLast($new_last);

$admin->save();

echo "0";

function fetch_id_by_email( $email ) {

    $database = Settings::get_database_connection();

    $result = $database->query("
        
        SELECT Admins.id FROM Admins WHERE email='$email';
        
    ");


    while ($row = mysqli_fetch_assoc($result)) {
        return $row['id'];
    }
}

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