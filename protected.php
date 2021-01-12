<?php
/**
 * Created by PhpStorm.
 * User: Tomás
 * Date: 2021. 01. 12.
 * Time: 9:39
 */

require_once  ('checkAccess.php');
require_once  ('loginDB.php');
$checkA = new checkAccess();
$checkA->checkAuth();
$loginC = new loginDB();

if(isset($_POST['logout'])) {
    $loginC->UserLogout();
}
?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login System</title>
</head>
<body>

<header class="header">

    <div class="box">
        <h1 class="primary">
            <span class="primary-text">Protected</span>
            <span class="primary-text">Kijelentkezes:</span>
        </h1>

        <form method="post">
            <input type="submit" class="btn" name="logout" value="Logout"/>
        </form>
    </div>


</header>


</body>
</html>



