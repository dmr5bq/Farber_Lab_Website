<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/24/16
 * Time: 8:49 AM
 */

require_once "../Settings.php";

function fetch_all_team_members() {

    $database = Settings::get_database_connection();

    $result = $database->query("
        
        SELECT * FROM TeamMembers ORDER BY `last`;
        
    ");

    $output = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;

}

function fetch_all_alumni() {

    $database = Settings::get_database_connection();

    $result = $database->query("
        
        SELECT * FROM Alumni ORDER BY `last`;
        
    ");

    $output = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;

}

function fetch_all_publications() {

    $database = Settings::get_database_connection();


    $sql_result = $database->query("
                SELECT * FROM Publications GROUP BY year ORDER BY date;
            ");

    if ( $sql_result != null ) {


    }


}

function fetch_publications_array_from_year( $year ) {

    $database = Settings::get_database_connection();

    $sql_result = $database->query("
    
            SELECT * FROM Publications WHERE year='$year';
   
    ");

    if ( $sql_result != null ) {

        $output = array();

        while ( $row = mysqli_fetch_assoc($sql_result) ) {

            $output[] = $row;

        }

        return $output;

    } else return null;

}

function fetch_publications_from_year( $year ) {

    $pub_array =  fetch_publications_array_from_year( $year );

    $output = array();

    if ( $pub_array != null) {

        foreach ($pub_array as $pub_row) {

            $title = $pub_row['title'];
            $authors = $pub_row['authors'];
            $published_in = $pub_row['published_in'];
            $link = $pub_row['link'];
            $pub_year = $pub_row['year'];
            $date = $pub_row['date'];

            $publication = Publication::create_publication($title, $authors, $published_in, $link, $pub_year, $date);

            $output[] = $publication;

        }

        return $output;

    } else return null;


}

function fetch_publication_years_array() {

    $database = Settings::get_database_connection();

    $sql_result = $database->query("
        SELECT DISTINCT Publications.year FROM Publications ORDER BY Publications.year DESC;
    ");

    $output = array();

    while ($row = mysqli_fetch_row($sql_result)) {
        $output[] = $row[0];
    }

    return $output;
}