<?php
/**
 * Created by PhpStorm.
 * User: Tomás
 * Date: 2021. 01. 12.
 * Time: 9:39
 */

include_once ('loginDB.php');
$loginC = new loginDB();

if (isset($_POST['login'])){
    $checkUser = $loginC->UserLogin($_POST['username'],$_POST['password']);

    if ($checkUser){
        header("location:protected.php");
    }
    else {
        echo '<script>alert("Nem talalhato ilyen felhasznalonev")</script>';
    }
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
            <span class="primary-text">Bejelentkezes:</span>
        </h1>

        <form name="login" id="login" method="post" action="">
            <p>
                <label for="username" class="label" > Username: </label>
                <input id="username" class="text-input" name="username" required="required" type="text" placeholder="Username"/>
            </p>
            <p>
                <label for="password" class="label" > Password: </label>
                <input id="password" name="password"class="text-input" required="required" type="password" placeholder="Password" />
            </p>

            <input type="submit"  class="btn" name="login" value="Login" />

        </form>
    </div>


</header>


</body>
</html>
