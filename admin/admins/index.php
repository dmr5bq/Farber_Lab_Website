<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php generate_header( $_SESSION['admin'] ) ?>
</body>
