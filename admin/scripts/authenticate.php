<?php

require_once "../../Settings.php";
require_once "../../scripts/Admin.php";

class Authenticator
{
    const AUTH_OK = 0;
    const AUTH_FAIL_PASSWORD = 1;
    const AUTH_FAIL_USERNAME = 2;
    const AUTH_UNINITIALIZED = 3;

    public $status;


    function __construct()
    {
        $this->status = self::AUTH_UNINITIALIZED;
    }

    function is_valid_admin($email, $password)
        {

            $database = Settings::get_database_connection();

            $password_hash = Admin::encrypt($password);

            echo "$email $password $password_hash";

            $sql_result = $database->query("
        
            SELECT * FROM Admins WHERE password='$password_hash' AND email='$email';
        
          ");

            return $sql_result != null;

        }

        function is_valid_email($email)
        {

            $database = Settings::get_database_connection();

            $sql_result = $database->query("
        
            SELECT * FROM Admins WHERE  email='$email';
        
        ");

            return $sql_result != null;
        }

    function authenticate($email, $password)
        {

        echo $this->status;

        if ($this->is_valid_admin($email, $password)) {

            $this->status = self::AUTH_OK;

        } else if ($this->is_valid_email($email)) {

            $this->status = self::AUTH_FAIL_PASSWORD;

        } else {

            $this->status = self::AUTH_FAIL_USERNAME;

        }
    }

    function redirect() {

        switch ( $this->status ) {
            case self::AUTH_OK:
                header('home/');
                break;
            case self::AUTH_FAIL_PASSWORD:
                header('index.php?status=fail_password');
                break;
            case self::AUTH_FAIL_USERNAME:
                header('index.php?status=fail_username');
                break;
            case self::AUTH_UNINITIALIZED:
                header('index.php');
        }

    }
}

$a = new Authenticator();

$a->is_valid_admin('aaa', 'a');