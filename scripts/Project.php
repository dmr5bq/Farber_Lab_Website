<?php


class Project {

    public $display_name;
    public $link_name;
    public $short_description;
    public $long_description;
    public $thumbnail_img_filename;

    const STD_EXT = '.txt';

    public function __construct($display_name, $link_name) {

        $this->display_name = $display_name;
        $this->link_name = $link_name;
        $this->thumbnail_img_filename = $link_name.'.png';
        $this->fetch_descriptions();

    }

    public function fetch_descriptions() {
        $abs_data_root = $_SERVER["DOCUMENT_ROOT"].'/Farber_Lab_Website/data/about/projects/'; // TODO TODO Will need changed

        $file_name = $this->link_name.self::STD_EXT;
        $file_path = $abs_data_root.$file_name;

        $file_str = file_get_contents( $file_path );

        $primary_delim = "\n---\n";

        $this->short_description = explode($primary_delim, $file_str)[0];
        $this->long_description = explode($primary_delim, $file_str)[1];
    }

    public function generate_preview_display() {

        $assets_root = '/Farber_Lab_Website/assets';

        echo "    
                <tr>
                        <td>
                            <img src=\"$assets_root/$this->thumbnail_img_filename\">
                        </td>
                        <td> 
                            <h2>
                                $this->display_name
                            </h2>
                            <p class=\"body-text\">
                                $this->short_description;
                            </p>
                        </td>
                 </tr>";

    }

    public function generate_page_display() {

    }




}