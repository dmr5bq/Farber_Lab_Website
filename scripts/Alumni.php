<?php

//require_once "../Settings.php";
require_once "Model.php";

class Alumni implements Model
{

    private $first;
    private $last;
    private $title;
    private $category;

    public static function create_alumni($first, $last, $title="not defined", $category='') {
        $output = new Alumni();

        $output->first = $first;
        $output->last = $last;
        $output->title = $title;
        $output->category = $category;

        return $output;
    }

    public function toString() {
        return "[Alumni: " . $this->first . " , " . $this->last . " ]";
    }

    public function generate_display() {

        echo "                    
                      <div class='person-box $this->category'>
                        <div class='person-text'>
                            <p> $this->first $this->last</p>
                            <p> $this->title </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
              ";

    }


    public function update() {

        $db_root = Settings::$db_root;
        $db_user = Settings::$db_user;
        $db_pass = Settings::$db_pass;
        $db_name = Settings::$db_name;

        $database = new mysqli($db_root, $db_user, $db_pass, $db_name);
        $first = $this->first;
        $last = $this->last;

        $result = $database->query("
        
            SELECT * FROM Alumni WHERE first='$first' AND last='$last';
        
        ") or die($database->error);

        if ($result != null)
            $res_row = mysqli_fetch_row($result);

        else
            $res_row = null;

        if ($res_row != null) {

            $this->first =      $res_row[1];
            $this->last =       $res_row[2];
            $this->title =      $res_row[3];
            $this->category =   $res_row[4];

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

        $loc_first =    $this->first;
        $loc_last =     $this->last;
        $loc_title =    $this->title;
        $loc_category = $this->category;

        $database->query("
        
            INSERT INTO TeamMembers 
            (first, last, title, category)
            VALUES
            ('$loc_first', '$loc_last', '$loc_title', '$loc_category');
        
        ")
        or die($database->error);
    }

    private function _is_valid() {
        return
            $this->first != null && $this->first !== ""
            &&
            $this->last != null && $this->last !== ""
            &&
            $this->title != null && $this->title !== "";
    }

}