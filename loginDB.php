<?php
/**
 * Created by PhpStorm.
 * User: Tomás
 * Date: 2021. 01. 12.
 * Time: 9:46
 */
require_once 'dbConn.php';
session_start();
class loginDB
{

    protected $db;
    /**
     * loginDB constructor.
     */
    public function __construct()
    {
        $dbtest = new dbConn();
        $this->db = $dbtest->dbConnection;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function UserLogin($username, $password){
        $query = "SELECT * FROM users WHERE username = '". $username. "' AND password = '".md5($password)."' ";
        $result = mysqli_query($this->db,$query);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['login']=true;
            $_SESSION['username']=$username;
            return true;
        }
        else {
            return false;
        }
    }

    public function UserLogout(){
        session_destroy();
        header("location:login.php");
    }
}

