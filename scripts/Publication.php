<?php

require_once "Model.php";

/*
 * class Publication:
 * -> interface Model
 *      -> methods
 *          -> store(): inserts into corresponding database table, updates in table if item already exists
 *          -> update(): updates the PHP object instance based on the database table
 * -> fields:
 *      title
 *      authors
 *      published_in
 *      link
 *      year
 *      date
 * */
class Publication
    implements Model
{

    // fields:
    private $title;
    private $authors;
    private $published_in;
    private $link;
    private $year;
    private $date;


    // methods:

    // function representation of a constructor to get a new Publication model
    public static function create_publication($title, $authors, $published_in, $link, $year, $date) {

        $pub = new Publication();

        $pub->title = $title;
        $pub->authors = $authors;
        $pub->published_in = $published_in;
        $pub->link = $link;
        $pub->year = $year;
        $pub->date = $date;

        return $pub;

    }

    // returns the string representation of the Publication model
    public function toString() {
        return "<b>Publication:</b> <br/>Title: $this->title <br/>Authors: $this->authors<br/>Published in $this->published_in<br/>Link: $this->link<br/>Year: $this->year<br/>$this->date<br/><br/>";
    }

    // generates the display in HTML used on the web page for any given Publication
    public function generate_display() {
        echo "
                        <li> 
                            <div>
                                <br>
                                <a href=\"$this->link\">
                                    <p class=\"article-name\">$this->title</p>
                                </a>
                                <p>$this->authors</p>
                                <p><em>$this->published_in</em></p>
                                <p>$this->date</p>
                            </div><!-- /li div -->
                        </li>
             ";
    }

    // updates the local record from the database record
    public function update() {

        // TODO TODO TODO


    }

    // inserts a version of the record into the database
    public function store() {


        // TODO handle updating existing records
        $database = Settings::get_database_connection();

        $database->query("
        
            INSERT INTO Publications (title, authors, published_in, link, year, date) 
            VALUES
            ('$this->title', '$this->authors', '$this->published_in', '$this->link', '$this->year', '$this->date')
        
        ");

    }
}