<?php

require_once "Model.php";

/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/24/16
 * Time: 12:14 PM
 */
class Publication implements Model
{

    private $title;
    private $authors;
    private $published_in;
    private $link;
    private $year;
    private $date;


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

    public function toString() {
        return "<b>Publication:</b> <br/>Title: $this->title <br/>Authors: $this->authors<br/>Published in $this->published_in<br/>Link: $this->link<br/>Year: $this->year<br/>$this->date<br/><br/>";
    }

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

    public function update() {

        // TODO TODO TODO


    }

    public function store() {

        $database = Settings::get_database_connection();

        $database->query("
        
            INSERT INTO Publications (title, authors, published_in, link, year, date) 
            VALUES
            ('$this->title', '$this->authors', '$this->published_in', '$this->link', '$this->year', '$this->date')
        
        ");

    }
}