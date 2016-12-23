<?php

class Alumni
{

    private $first;
    private $last;
    private $title;
    private $category;

    public static function create_alumni($first, $last, $email="not defined", $category="ug", $title="not defined", $has_image=false) {
        $output = new Alumni();

        $output->first = $first;
        $output->last = $last;
        $output->title = $title;
        $output->category = $category;

        return $output;
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


    // TODO TODO TODO
    public function store($database) {

    }

    public function update($database) {

    }


}