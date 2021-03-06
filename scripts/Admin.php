<?php

//require_once "../Settings.php";
require_once "Model.php";

/*
 * class Admin
 * -> interface Model
 *    -> methods
 *       -> store(): inserts into corresponding database table, updates in table if item already exists
 *       -> update(): updates the PHP object instance based on the database table
 * -> fields:
 *      first
 *      last
 *      email
 *      password
 * */
class Admin implements Model
{

    private $first;
    private $last;
    private $email;
    private $password;

    // changes the stored password to the encrypted version of the plaintext password parameter
    public function change_password($password_plaintext) {
        $this->password = Admin::encrypt($password_plaintext);
    }

    // used to protect user passwords in the PHP object and database record versions of the Admin model
    // the plaintext version of the password is *never* stored
    public static function encrypt($plain_text) {
        $salt = Settings::get_encryption_salt();
        return crypt($plain_text, $salt);
    }


    // used as a functional-style constructor to get a new Admin PHP object
    public static function create_admin($first, $last, $email="", $password) {
        $output = new Admin();

        $output->first = $first;
        $output->last = $last;
        $output->email = $email;
        $output->change_password($password);

        return $output;
    }

    // get the string version of the object
    public function toString() {
        return "[Admin: " . $this->first . " , " . $this->last .  " , " . $this->email . " ]";
    }

    // update the local model from the corresponding db record
    public function update() {

        $database = Settings::get_database_connection();

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

    // insert the local Admin model into a db record or update the corresponding db record
    public function store() {

        $database = Settings::get_database_connection();

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

    public function save() {

        $database = Settings::get_database_connection();

        $adm_email = $this->email;
        $adm_first = $this->first;
        $adm_last = $this->last;
        $adm_password = $this->password;

        $database->query(
            "
             UPDATE Admins SET password='$adm_password', first='$adm_first' , last='$adm_last' WHERE email='$adm_email' ;
            "
        )
        or die($database->error);
    }



    // TODO TODO TODO NEED A SAVE_INFO METHOD HERE TO UPDATE THE EMAIL WITHOUT SAVE()

    // validates if the model represents a complete record, used to protect the database from incomplete records
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

    public function getEmail() {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->last = $last;
    }
}