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
        echo "NEM SIKERULT";
        //TODO style kell ide majd
    }
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<div class="container">
    <header>
        <h1>Login and Registration Form  </h1>
    </header>
    <section>
        <div id="container_demo" >

            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form name="login" method="post" action="">
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="youmail" data-icon="e" > Your email</label>
                            <input id="username" name="username" required="required"  placeholder="username"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="login button">
                            <input type="submit" name="login" value="login" />
                        </p>

                    </form>
                </div>


            </div>
        </div>
    </section>
</div>
</body>
</html>
