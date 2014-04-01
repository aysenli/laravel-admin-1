<?php
namespace Vendor\Api;
use Vendor\Api\HomeController;
use \Models\Images;
use Input, Notification, Redirect, Sentry, Str,Session;
class UserController extends HomeController {

    public function __construct(){
        parent::__construct();
    }
    public function getIndex2()
    {

    }

    public function getUserStatus(){
        $result=array();
        if($_SESSION['uid']<>''){
            $result['uid']=$_SESSION['uid'];
            $result['username']=$_SESSION['username'];
            $result['status']=1;
        }else{
            $result['status']=0;
        }
        echo json_encode($result);
    }

}


