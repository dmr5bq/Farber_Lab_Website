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

    private $year;
    private $date;
    private $authors;
    private $title;
    private $published_in;
    private $link;

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

    }

    public function store() {

    }
}