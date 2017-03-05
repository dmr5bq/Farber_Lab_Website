<?php

require_once "../../Settings.php";
require_once "../../scripts/Admin.php";

?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../../scripts/master.js"></script>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php

    if($_SERVER['REQUEST_METHOD'] == "GET") {
            $first = '';
            $last = '';
            $email = '';
            $key = '';

            if (isset($_GET['first']) && isset($_GET['last']) && isset($_GET['email']) && isset($_GET['key'])) {

                if ($_GET['first'] != '' && $_GET['last'] != '' && $_GET['email'] != '' && $_GET['key'] != '' ) {

                    $first = $_GET['first'];
                    $last = $_GET['last'];
                    $email = $_GET['email'];
                    $key = $_GET['key'];

                    if (!is_valid_invitation($email, $key)) send_redirect();
                    else print_form($first, $last, $email, $key);

                } else send_redirect();

            } else send_redirect();

    } else if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (isset($_POST['first']) && isset($_POST['last']) && isset($_POST['email']) && isset($_POST['password'])) {

            $a = Admin::create_admin(rtrim($_POST['first']), rtrim($_POST['last']), rtrim($_POST['email']), rtrim($_POST['password']));

            if (is_valid_invitation($_POST['email'], $_POST['key'])) $a->store();
            else send_redirect();

            print_success($_POST['email']);

        }

    }


    ?>

</body>

<?php

function send_redirect() {
    header('location: ../?status=improper_access');
}

function is_valid_invitation($email, $key) {

    $database = Settings::get_database_connection();

    $result_email = $database->query("
        SELECT Admins.id FROM Admins WHERE email='$email';
    ");

    $arr_0 = mysqli_fetch_assoc($result_email);

    $result_key = $database->query("
        SELECT id FROM Admins WHERE password='$key';
    ");

    $arr_1 = mysqli_fetch_assoc($result_key);


    $not_already_registered = $arr_0 == null;

    $key_is_from_valid_admin = $arr_1 != null && isset($arr_1['id']);

    return $not_already_registered && $key_is_from_valid_admin;
}


function print_form($first, $last, $email, $key) {
    echo "
    
            <div class=\"container\">
            <form action=\"../invitation/\" method=\"post\">
            <div class=\"row\">
                <h2>Register as an Administrator</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    <label for=\"first\">First Name</label>
                </div>
                <div class=\"col-xs-6\">
                    <input type=\"text\" name=\"first\" id=\"first\" value=\"$first\"/>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    <label for=\"last\">Last Name</label>
                </div>
                <div class=\"col-xs-6\">
                    <input type=\"text\" name=\"last\" id=\"last\" value=\"$last\"/>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    <label for=\"email\">Email Address</label>
                </div>
                <div class=\"col-xs-6\">
                    <input type=\"email\" name=\"email\" id=\"email\" value=\"$email\"/>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    <label for=\"password\">Password</label>
                </div>
                <div class=\"col-xs-6\">
                    <input type=\"password\" name=\"password\" id=\"password\"/>
                    <input type=\"hidden\" name=\"key\" id=\"key\" value='$key'/>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-9\">
                    <button class=\"btn btn-primary btn-md\" type=\"submit\">Register</button>
                </div>
            </div>
            </form>
        </div>
    
    ";
}

function print_success($email) {
    echo "
        <div class='container'>
            <div class='row'>
                <h2>Register as an Administrator</h2>
            </div>
            <div class='row'>
                <div class='alert alert-success col-xs-12'>
                    <b>$email</b> has successfully been registered as an administrator.
                </div>
            </div>
            <div class='row'>
                <button class='btn btn-md btn-success' onclick='location.href = \"../\"'>Go to Administrator Home</button>
            </div>
        </div>
    
    ";
}


?>