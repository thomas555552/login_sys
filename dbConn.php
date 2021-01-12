<?php
/**
 * Created by PhpStorm.
 * User: Tomás
 * Date: 2021. 01. 12.
 * Time: 9:41
 */
define("DBHOST", 'localhost');
define("DBUSER", 'root');
define("DBPASSW", '');
define("DBDATABASE", 'login_sys');

class dbConn
{
    public $dbConnection;
    /**
     * dbConn constructor.
     */
    public function __construct()
    {
        $conn = mysqli_connect(DBHOST,DBUSER,DBPASSW, DBDATABASE);
        if (!$conn){
            die("Nem lehet csatlakozni az adatbazishoz!");
        }
        else{
        $this->dbConnection=$conn;
            }
    }

    public function Close(){
        mysqli_close();
    }

}

