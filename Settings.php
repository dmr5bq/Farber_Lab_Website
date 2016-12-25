<?php

class Settings
{
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

    public static function get_database_connection() {
        return new mysqli(self::$db_root, self::$db_user, self::$db_pass, self::$db_name);
    }


}