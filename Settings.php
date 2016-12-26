<?php


/**
    Settings class:
 *  -> static fields
 *      db_root: Name of the db domain
 *      db_user: Username for db root access
 *      db_pass: Password for db root access
 *      db_name: Name of the MySQL
 *      alumni_data_filename: path to the initialization data file for the Alumni table
 *      team_members_data_filename: path to the initialization data file for the TeamMembers table
 *      publications_data_filename: path to the initialization data file for the Publications table
 *      message_recipients: an array of the default recipients for any Contact section messages sent through the site
 *
 */

class Settings
{

    // fields:
    private static $db_root = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_name = 'Farber';
    public static $alumni_data_filename = 'data/people/alum_init.txt';
    public static $team_members_data_filename = 'data/people/tm_init.txt';
    public static $publications_data_filename = 'data/publications/pub_init.txt';
    public static $message_recipients = array(
                                        'dmr5bq@virginia.edu'
                                        );


    // methods:

    // Simplifies database connection for other files, abstracts settings
    public static function get_database_connection() {
        return new mysqli(self::$db_root, self::$db_user, self::$db_pass, self::$db_name);
    }

    // resets the database state by dropping the db and the re-creating it
    public static function reset_database() {
        $db_root = Settings::$db_root;
        $db_user = Settings::$db_user;
        $db_pass = Settings::$db_pass;
        $db_name = Settings::$db_name;

        $database_root = new mysqli($db_root, $db_user, $db_pass);

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

}