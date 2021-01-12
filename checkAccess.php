<?php


class checkAccess
{
    public $authOK;
    /**
     * checkAccess constructor.
     */
    public function __construct()
    {
        if($_SESSION['login']==true) {
            $this->authOK=true;
        }
        else {
            $this->authOK=false;
        }
    }

    public function checkAuth(){
        if(!$this->authOK){
            header("location:login.php");
        }

    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}