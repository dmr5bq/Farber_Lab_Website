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
require_once "scripts/Publication.php";

// reset the database to the default state
Settings::reset_database();

// initialize all of the tables in the database
build_tables();

// read in all of the datafile information and create records in the database for each
initialize_all();

?>

<a href="index.php">Go to Home Page</a>

<?php

// creates DB tables for TeamMembers, Alumni, Admins, and Publications
function build_tables() {

    // get a MySQL database connection
    $database = Settings::get_database_connection();

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

    $database->query("
    CREATE TABLE Publications (id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, title VARCHAR(150), authors VARCHAR(300), published_in VARCHAR(50), link VARCHAR(100), year CHAR(4), date VARCHAR(20))
  ")
    or die($database->error);

}

// populate all of the database tables with the default information in the datafiles
function initialize_all() {
    initialize_team_members(Settings::$team_members_data_filename);
    initialize_alumni(Settings::$alumni_data_filename);
    initialize_publications(Settings::$publications_data_filename);
    initialize_admins(Settings::$admins_data_filename);
}

// initialize the publications table from the datafile
function initialize_publications ($data_filename) {

    $file_str = file_get_contents($data_filename);

    $row_array = explode("\n", $file_str);

    $pub_array = array();

    foreach ($row_array as $row):

        $new_row = explode('+', $row);

        $pub_array[] = $new_row;

    endforeach;

    foreach ($pub_array as $pub_row):

        // create_publication($title, $authors, $published_in, $link, $year, $date)


        // TODO TODO TODO NOT WORKING RIGHT
        $pub = Publication::create_publication($pub_row[1], $pub_row[2], $pub_row[3], $pub_row[0], substr($pub_row[4], strlen($pub_row[4]) - 4), $pub_row[4]);


        $pub->store();

    endforeach;

}

// initialize the team members from the datafile
function initialize_team_members ($data_filename) {

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

// initialize the alumni table from the datafile
function initialize_alumni ($data_filename) {

    $file_str = file_get_contents($data_filename);

    $row_array = explode("/\n", $file_str);

    $tm_array = array();

    foreach ($row_array as $row):

        $new_row = explode(':', $row);

        $tm_array[] = $new_row;

    endforeach;

    foreach ($tm_array as $a_row):

        $al = Alumni::create_alumni($a_row[0], $a_row[1], $a_row[2], $a_row[3]);

        $al->store();

    endforeach;
}

function initialize_admins( $data_filename) {

    $file_str = file_get_contents($data_filename);

    $row_array = explode("\n", $file_str);

    $adm_array = array();

    foreach ($row_array as $row):

        $new_row = explode(':', $row);

        $adm_array[] = $new_row;

    endforeach;

    foreach ($adm_array as $a_row):
        $ad = Admin::create_admin(rtrim($a_row[0]), rtrim($a_row[1]), rtrim($a_row[2]), rtrim($a_row[3]));

        $ad->store();

    endforeach;

}