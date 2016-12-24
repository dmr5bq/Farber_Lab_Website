<?php

//require_once "../Settings.php";
require_once "Model.php";


class Admin implements Model
{

    private $first;
    private $last;
    private $email;
    private $password;

    public function change_password($password) {
        $this->password = Admin::_encrypt($password);
    }

    private static function _encrypt($plain_text) {
        return crypt($plain_text);
    }

    public static function create_admin($first, $last, $email="", $password) {
        $output = new Admin();

        $output->first = $first;
        $output->last = $last;
        $output->email = $email;
        $output->change_password($password);

        return $output;
    }

    public function toString() {
        return "[Admin: " . $this->first . " , " . $this->last .  " , " . $this->email . " ]";
    }

    public function update() {

        $db_root = Settings::$db_root;
        $db_user = Settings::$db_user;
        $db_pass = Settings::$db_pass;
        $db_name = Settings::$db_name;

        $database = new mysqli($db_root, $db_user, $db_pass, $db_name);
        $adm_email = $this->email;

        $result = $database->query("
        
            SELECT * FROM Admins WHERE email='$adm_email';
        
        ") or die($database->error);

        if ($result != null)
            $res_row = mysqli_fetch_row($result);

        else
            $res_row = null;

        if ($res_row != null) {

            $this->first = $res_row[1];
            $this->last = $res_row[2];
            $this->email = $res_row[3];
            $this->password = $res_row[4];

            return true;

        } else if ($this->_is_valid()) {
            $this->store();
            return false;

        } else
            return false;

    }

    public function store() {

        $db_root = Settings::$db_root;
        $db_user = Settings::$db_user;
        $db_pass = Settings::$db_pass;
        $db_name = Settings::$db_name;

        $database = new mysqli($db_root, $db_user, $db_pass, $db_name);

        $adm_first = $this->first;
        $adm_last = $this->last;
        $adm_email = $this->email;
        $adm_password = $this->password;

        $database->query("
        
            INSERT INTO Admins 
            (first, last, email, password)
            VALUES
            ('$adm_first', '$adm_last', '$adm_email', '$adm_password');
        
        ")
            or die($database->error);
    }

    private static function _user_in_database($email) {

        $db_root = Settings::$db_root;
        $db_user = Settings::$db_user;
        $db_pass = Settings::$db_pass;
        $db_name = Settings::$db_name;

        $database = new mysqli($db_root, $db_user, $db_pass, $db_name);

        $result = $database->query("
        
            SELECT * FROM Admins WHERE email='$email';
        
        ")
            or die($database->error);

        return $result == null;

    }

    private function _is_valid() {
        return
            $this->first != null    &&  $this->first !== ""
            &&
            $this->last != null     &&  $this->last !== ""
            &&
            $this->email != null    &&  $this->email !== ""
            &&
            $this->password != null &&  $this->password !== "";
    }

}