<?php

require_once "../../Settings.php";

$database = Settings::get_database_connection();

$result = $database->query("
    SELECT * FROM Admins WHERE 1;
");

$adm_array = array();


if ($result != null)
    while ($row = mysqli_fetch_assoc($result)) {

        $adm_record = array('id'=>$row['id'],'first'=>$row['first'], 'last'=>$row['last'], 'email'=>$row['email'], 'password'=>$row['password']);

        $adm_array[] = $adm_record;

    }

    echo json_encode($adm_array);

