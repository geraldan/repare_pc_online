<?php
$login = "root";
$password = "root";

if(isset($_POST['login']) && $login == $_POST['login'] && $password == $_POST['password']) {
    session_start();
    /*session is started if you don't write this line can't use $_Session  global variable*/
    $_SESSION["connected"] = "yes";
    header('location: creationCentre.php');
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>RDV</title>
</head>
<body>
    <div class="form_on">
        <h4>Connection</h4>
        <form action="" method="POST" role="form" class="php-email-form">
        <div class="col-md-6 form-group">
                  <input type="text" name="login" class="form-control-on" id="name" placeholder="Identifiant" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
            <div>
            <div class="col-md-6 form-group">
                  <input type="text" name="password" class="form-control-on" id="name" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
            <div>
            <input class="btn-on" type="submit" value="Connection">
            </div>
        </form>
    </div>
</body>
</html>