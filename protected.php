<?php
/**
 * Created by PhpStorm.
 * User: Tomás
 * Date: 2021. 01. 12.
 * Time: 9:39
 */

require_once  ('checkAcces.php');
require_once  ('loginDB.php');
$checkA = new checkAccess();
$checkA->checkAuth();
$loginC = new loginDB();

if(isset($_POST['button1'])) {
    $loginC->UserLogout();
}
?>

<form method="post">
    <input type="submit" name="button1"
           value="Button1"/>
</form>
