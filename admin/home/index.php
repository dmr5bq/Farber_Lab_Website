<?php

require_once "../scripts/auth_check.php";
require_once "../../scripts/data.php";

check_authentication();


?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../../scripts/master.js"></script>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Welcome, <?php echo $_SESSION['admin']->getFirst().' '.$_SESSION['admin']->getLast();?></h2><p>You're logged in as <?php echo "<b>".$_SESSION['admin']->getEmail().".</b>"; ?></p>
        </div>
        <div class="panel-footer">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-md btn-success" onclick="location.href = '../profile';">
                    <span class="glyphicon glyphicon-user"></span> Manage My Profile
                </button>
                <button type="button" class="btn btn-md btn-danger" onclick="location.href = '../';"><span class="glyphicon glyphicon-remove"></span> Log Out</button>
            </div>
        </div>
    </div>
     <div class="container-fluid container">
         <div class="col-xs-12">
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
            <button type="button" class="btn btn-md btn-primary" onclick="location.href = '../people';">
                <span class="glyphicon glyphicon-th"></span> Manage People
            </button>
            <button type="button" class="btn btn-md btn-primary" onclick="location.href = '../about';">
                <span class="glyphicon glyphicon-info-sign"></span> Manage About
            </button>
            <button type="button" class="btn btn-md btn-primary" onclick="location.href = '../people';">
                <span class="glyphicon glyphicon-book"></span> Manage Publications
            </button>
            <button type="button" class="btn btn-md btn-primary" onclick="location.href = '../admins';">
                <span class="glyphicon glyphicon-star"></span> Manage Administrators
            </button>
        </div>
             <button type="button" class="btn btn-lg btn-danger" onclick="reset_site()">
                 <span class="glyphicon glyphicon-flag"></span> Reset Website to Default
             </button>
        </div>
    </div>
</body>

<script type="text/javascript">


    function reset_site() {

        var reset_script = '../../local_init.php';

        if (!confirm('Are you sure that you want to reset the website? This cannot be undone.')) return;

        $.post(reset_script,'', function() {
            alert('The website has been reset.');
        })
    }
</script>



