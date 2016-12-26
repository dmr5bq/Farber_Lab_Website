<?php

//require_once "../Settings.php";
require_once "Model.php";


/*
 * class Alumni
 * -> interface Model
 *    -> methods
 *       -> store(): inserts into corresponding database table, updates in table if item already exists
 *       -> update(): updates the PHP object instance based on the database table
 * -> fields:
 *      first
 *      last
 *      title
 *      category
 * */
class Alumni
    implements Model
{
    // fields
    private $first;
    private $last;
    private $title;
    private $category;

    // functional representation of the Alumni constructor
    public static function create_alumni($first, $last, $title="not defined", $category='') {
        $output = new Alumni();

        $output->first = $first;
        $output->last = $last;
        $output->title = $title;
        $output->category = $category;

        return $output;
    }

    // returns string representation of the Alumni object
    public function toString() {
        return "[Alumni: " . $this->first . " , " . $this->last . " ]";
    }

    // echoes the HTML representation of the Alumni object
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

    // updates the local record from the corresponding database record
    public function update() {

        $database = Settings::get_database_connection();

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

    // inserts a record for the Alumni model into the table, updates a corresponding record if it exists
    public function store() {

        $database = Settings::get_database_connection();

        $loc_first =    $this->first;
        $loc_last =     $this->last;
        $loc_title =    $this->title;
        $loc_category = $this->category;

        $database->query("
        
            INSERT INTO Alumni
            (first, last, title, category)
            VALUES
            ('$loc_first', '$loc_last', '$loc_title', '$loc_category');
        
        ")
        or die($database->error);
    }

    // returns true if all of the fields contain information; protects database from incomplete records
    private function _is_valid() {
        return
            $this->first != null && $this->first !== ""
            &&
            $this->last != null && $this->last !== ""
            &&
            $this->title != null && $this->title !== "";
    }

}