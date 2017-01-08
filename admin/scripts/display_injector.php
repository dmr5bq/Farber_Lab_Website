<?php



function generate_header( $admin, $section ) {

    require_once "../../scripts/Admin.php";

    $email = $admin->getEmail();

    echo "
        <div class=\"panel panel-primary row col-xs-12\">
            <div class=\"panel-heading\">
                <h3>Manage $section</h3>
            </div>
            <div class=\"panel-body\">
                <p>You're logged in as <b>$email</b></p>
            </div>
            <div class=\"panel-footer\">
                <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-default\" onclick=\"location.href = '../home';\">
                        <span class=\"glyphicon glyphicon-triangle-left\"></span> Go Back to Home
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"location.href = '../';\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Log Out
                    </button>
                </div>
            </div>
</div>
    ";
}