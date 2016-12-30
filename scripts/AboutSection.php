<?php


class AboutSection {

    public $display_name;
    public $link_name;
    public $text_data;

    const STD_EXT = '.txt';

    public function __construct($display_name, $link_name)
    {

        $this->display_name = $display_name;
        $this->link_name = $link_name;
        $this->fetch_text_data();

    }

    public function fetch_text_data() {

        $abs_data_root = $_SERVER["DOCUMENT_ROOT"].'/Farber_Lab_Website/data/about/'; // TODO TODO Will need changed

        $file_name = $this->link_name.self::STD_EXT;
        $file_path = $abs_data_root.$file_name;

        $this->text_data = file_get_contents( $file_path );

    }

    public function store_text_data() {

        $abs_data_root = $_SERVER["DOCUMENT_ROOT"].'/Farber_Lab_Website/data/about/'; // TODO TODO Will need changed

        $file_name = $this->link_name.self::STD_EXT;
        $file_path = $abs_data_root.$file_name;

        $out = fopen($file_path, 'w');

        fwrite($out, $this->text_data);

        fclose($out);
    }

    function generate_display() {
        echo "            
            <p>$this->display_name</p>
            <a href='javascript:void(0);' name='$this->link_name'></a> <!--Used for page jumps-->
                $this->text_data
            ";
    }
}