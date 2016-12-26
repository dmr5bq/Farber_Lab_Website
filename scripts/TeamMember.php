<?php

//require_once "../Settings.php";
require_once "Model.php";

/*
 * class TeamMember
 * -> interface Model
 *    -> methods
 *       -> store(): inserts into corresponding database table, updates in table if item already exists
 *       -> update(): updates the PHP object instance based on the database table
 * -> fields:
 *      first
 *      last
 *      email
 *      title
 *      has_image
 *      category
 * */
class TeamMember
    implements Model
{
    // fields:
    private $first;
    private $last;
    private $email;
    private $title;
    private $has_image;
    private $category;

    // methods:

    // functional version of the TeamMember constructor
    public static function create_team_member($first, $last, $email="not defined", $title="not defined", $category="", $has_image=false) {
        $output = new TeamMember();

        $output->first = $first;
        $output->last = $last;
        $output->email = $email;
        $output->title = $title;
        $output->has_image = $has_image;
        $output->category = $category;

        return $output;
    }

    // returns a string representation of the TM
    public function toString() {
        return "[TeamMember: " . $this->first . " , " . $this->last .  " , " . $this->email . " ]";
    }

    // echoes an HTML representation of the TM
    public function generate_display() {

        $img_link = '../assets/web_' . strtolower($this->last) . '.jpg';
        $img_or_empty = $this->has_image ? "<img class='person-photo' src='$img_link'>" : "";
        $hidden_or_not = $this->has_image ? 'hidden' : '';


        echo "                    
                    <div class='person-box $this->category'>" .
                        $img_or_empty . "
                        <div class='person-text $hidden_or_not'>
                            <p> $this->first $this->last </p>
                            <p> $this->title </p>
                        </div><!-- /person-text -->
                        
                        <a href='mailto:$this->email'>
                                <div>
                                    <img src='../assets/email_logo_only.png'>
                                </div>
                            </a>
                    </div><!-- /person-box -->
              ";

    }

    // updates the local model from the corresponding database record
    public function update() {

        $database = Settings::get_database_connection();

        $first = $this->first;
        $last = $this->last;

        $result = $database->query("
        
            SELECT * FROM TeamMembers WHERE first='$first' AND last='$last';
        
        ") or die($database->error);

        if ($result != null)
            $res_row = mysqli_fetch_row($result);

        else
            $res_row = null;

        if ($res_row != null) {

            $this->first = $res_row[1];
            $this->last = $res_row[2];
            $this->email = $res_row[3];
            $this->title = $res_row[4];
            $this->has_image = ($res_row[5] == 1);
            $this->category = $res_row[6];

            return true;

        } else if ($this->_is_valid()) {
            $this->store();
            return false;

        } else
            return false;

    }

    // inserts a new record into the database
    public function store() {

        $database = Settings::get_database_connection();

        $loc_first =    $this->first;
        $loc_last =     $this->last;
        $loc_email =    $this->email;
        $loc_title =    $this->title;
        $loc_has_img =  $this->has_image ? 1 : 0;
        $loc_category = $this->category;

        $database->query("
        
            INSERT INTO TeamMembers 
            (first, last, email, title, has_image, category)
            VALUES
            ('$loc_first', '$loc_last', '$loc_email', '$loc_title', '$loc_has_img', '$loc_category');
        
        ")
        or die($database->error);
    }

    // validates that the model is complete; protects the database from incomplete records
    private function _is_valid() {
        return
            $this->first != null && $this->first !== ""
            &&
            $this->last != null && $this->last !== ""
            &&
            $this->title != null && $this->title !== "";
    }

}