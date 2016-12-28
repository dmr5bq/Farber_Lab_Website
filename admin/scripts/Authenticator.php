<?php


require_once $_SERVER['DOCUMENT_ROOT']."/Farber_Lab_Website/Settings.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Farber_Lab_Website/scripts/Admin.php";

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

            echo "$email $password $password_hash <br/>";

            $sql_result = $database->query("
        
            SELECT * FROM Admins WHERE email='$email';
        
          ");

            $match = mysqli_fetch_assoc($sql_result);

            if ($match != null) {

                echo $match['email'];

                return strcmp($match['password'], $password_hash) == 0;
            }



        }

        function is_valid_email($email)
        {

            $database = Settings::get_database_connection();

            $sql_result = $database->query("
        
            SELECT * FROM Admins WHERE  email='$email';
        
        ");

            $match = mysqli_fetch_assoc($sql_result);

            if ($match != null) {

                return true;
            }
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
                header('location: home/');
                break;
            case self::AUTH_FAIL_PASSWORD:
                header('location: index.php?status=fail_password');
                break;
            case self::AUTH_FAIL_USERNAME:
                header('location: index.php?status=fail_username');
                break;
            case self::AUTH_UNINITIALIZED:
                header('location: index.php');
        }

    }
}
