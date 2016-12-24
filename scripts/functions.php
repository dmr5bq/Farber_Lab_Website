<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/24/16
 * Time: 8:49 AM
 */

require_once "../Settings.php";

function fetch_all_team_members() {

    $db_root = Settings::$db_root;
    $db_user = Settings::$db_user;
    $db_pass = Settings::$db_pass;
    $db_name = Settings::$db_name;

    $database = new mysqli($db_root, $db_user, $db_pass, $db_name);

    $result = $database->query("
        
        SELECT * FROM TeamMembers ORDER BY `last`;
        
    ");

    $output = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;

}