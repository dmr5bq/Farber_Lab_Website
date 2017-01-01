<?php

require_once "../../Settings.php";
require_once "../../scripts/Admin.php";

$str_data = file_get_contents('php://input');

$array_data = json_decode($str_data, true);

$email = rtrim($array_data['email']);

$old_password = rtrim($array_data['old_password']);

if (verify_password($email, $old_password)) {

    

}



function verify_password ($email, $password) {

    $database = Settings::get_database_connection();

    $enc_pass = Admin::encrypt($password);

    $result = $database->query("
    
      SELECT * FROM Admins WHERE email='$email' AND password='$enc_pass';
    
    ");

    $match = $result != null ? mysqli_fetch_assoc($result)['email'] : 'fail';

    return strcmp($match, $email) == 0;

}
