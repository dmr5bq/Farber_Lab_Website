<?php

    require_once "../scripts/retrieval.php";
    require_once "scripts/Authenticator.php";

    session_start();

    if (! isset($_SESSION['authenticator']))
        $_SESSION['authenticator'] = new Authenticator();
?>

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
                <button type="submit" >Log In</button>
            </td>
            <td>
                <a href="../reset/">Forgot Password?</a>
            </td>
        </tr>

    </table>

</form>

<?php


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password_plaintext = $_POST['password'];


    $_SESSION['authenticator']->authenticate($email, $password_plaintext);

    $_SESSION['authenticator']->redirect();

}


?>