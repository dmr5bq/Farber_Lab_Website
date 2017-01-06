<?php

    require_once "../scripts/retrieval.php";
    require_once "scripts/Authenticator.php";

    $ses_stat = session_status();

    $has_session =
        $ses_stat !== PHP_SESSION_DISABLED ||
        $ses_stat !== PHP_SESSION_NONE ||
        $ses_stat === PHP_SESSION_ACTIVE;

    if ($has_session) {
        if (isset($_SESSION['authenticator']))
            $_SESSION['authenticator']->status = Authenticator::AUTH_UNINITIALIZED;
        else {
            session_start();
            session_destroy();
        }
    }

    session_start();

    if (! isset($_SESSION['authenticator']))
        $_SESSION['authenticator'] = new Authenticator();

?>
<head>
    <link rel="stylesheet" href="../stylesheets/bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Welcome, Administrator</h1>
            <h4><i>Log in below.</i></h4>
        </div>
        <div class="panel-body">
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" placeholder="e.g., admin123@email.com" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" placeholder="Enter your password." required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-md btn-primary">Log In</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-md btn-warning" onclick="location.href ='../reset';">Forgot Password?</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>

<?php


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password_plaintext = $_POST['password'];

    $_SESSION['authenticator']->authenticate($email, $password_plaintext);

    if ($_SESSION['authenticator']->status == Authenticator::AUTH_OK) {
        if (!isset($_SESSION['admin'])) {
            $_SESSION['admin'] = new Admin();
            $_SESSION['admin']->setEmail($email);
            $_SESSION['admin'] = fetch_admin_by_email($_SESSION['admin']->getEmail());

        }
    }

    $_SESSION['authenticator']->redirect();

}


?>