<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/30/16
 * Time: 9:15 AM
 */

function check_authentication() {

    require_once "../scripts/Authenticator.php";

    session_start();

    if (isset($_SESSION['authenticator'])) {
        if ($_SESSION['authenticator']->status !== Authenticator::AUTH_OK) {
            header('location: ../index.php?status=improper_access');
        }
    } else {
        header('location: ../index.php?status=improper_access');
}

}