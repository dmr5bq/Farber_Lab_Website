<?php

class TeamMember
{

    private $first;
    private $last;
    private $email;
    private $title;
    private $has_image;
    private $category;

    public static function create_team_member($first, $last, $email="not defined", $category="ug", $title="not defined", $has_image=false) {
        $output = new TeamMember();

        $output->first = $first;
        $output->last = $last;
        $output->email = $email;
        $output->title = $title;
        $output->has_image = $has_image;
        $output->category = $category;

        return $output;
    }

    public function generate_display() {

        $img_link = 'web_' . strtolower($this->last) . '.jpg';
        $img_or_empty = $this->has_image ? "<img class='person-photo' src='$img_link'>" : "";


        echo "                    
                    <div class='person-box $this->category'>" .
                        $img_or_empty . "
                        <div class='person-text hidden'>
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


    // TODO TODO TODO
    public function store($database) {

    }

    public function update($database) {

    }

}