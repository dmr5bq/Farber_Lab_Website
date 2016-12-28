<?php

require_once "../scripts/Authenticator.php";

session_start();

if (isset($_SESSION['authenticator'])) {
    if ($_SESSION['authenticator']->status != Authenticator::AUTH_OK) {
        header('location: ../index.php?status=improper_access');
    }
} else {
    header('location: ../index.php?status=improper_access');
}
