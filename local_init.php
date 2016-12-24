<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/23/16
 * Time: 12:12 PM
 */

require_once "Settings.php";
require_once "scripts/Admin.php";
require_once "scripts/Alumni.php";
require_once "scripts/TeamMember.php";

$db_root = Settings::$db_root;
$db_user = Settings::$db_user;
$db_pass = Settings::$db_pass;
$db_name = Settings::$db_name;

$database_root = new mysqli($db_root, $db_user, $db_pass);

reset_database($database_root, $db_name);

$database = new mysqli($db_root, $db_user, $db_pass, $db_name);

build_tables($database);

initialize_team_members($database, 'data/tm_init.txt');


function reset_database($database_root, $db_name) {
    $database_root->query(
        "
    DROP DATABASE $db_name;
    ")
    or die($database_root->error);

    $database_root->query(
        "
    CREATE DATABASE $db_name;
    ")
    or die($database_root->error);
}


function build_tables($database) {
    $database->query("
    CREATE TABLE TeamMembers 
      (id integer AUTO_INCREMENT NOT NULL PRIMARY KEY ,first VARCHAR(30), last VARCHAR(30), email VARCHAR(40), title VARCHAR(100), category VARCHAR(10), has_image INTEGER(1))
  ")
    or die($database->error);

    $database->query("
    CREATE TABLE Alumni (id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, first VARCHAR(30), last VARCHAR(30), title VARCHAR(100), category VARCHAR(10))
")
    or die($database->error);

    $database->query("
    CREATE TABLE Admins (id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, first VARCHAR(30), last VARCHAR(30), email VARCHAR(40), password VARCHAR(100))
")
    or die($database->error);
}

function initialize_team_members($database, $data_filename) {

    $file_str = file_get_contents($data_filename);

    $row_array = explode("/\n", $file_str);

    $tm_array = array();

    foreach ($row_array as $row):

        $new_row = explode(':', $row);

        $tm_array[] = $new_row;

    endforeach;

    foreach ($tm_array as $tm_row):

        $tm = TeamMember::create_team_member($tm_row[0], $tm_row[1], $tm_row[2], $tm_row[3], $tm_row[4], $tm_row[5] === 'true');

        $tm->store();

    endforeach;

}