<?php
namespace Vendor\Admin;
use Vendor\Admin\HomeController;
use View,Input,Redirect,URL,Hash,Auth;
class LoginController extends HomeController {
   
    public function __construct(){
        parent::__construct();
    }

	public function index(){
        if(Input::has('username')){
            $post_all=Input::all();
            if($post_all['username']<>'' && $post_all['password']<>''){
                $AdminUser=new \Models\AdminUser;
                $a=$AdminUser::find(1);
                Auth::login($a);
                if (Auth::check()){
                    return Redirect::to('/admin/index/index');
                }else{
                    return Redirect::to('/admin/login/index');
                }

            }

        }else{
            $displayData=$this->_displayData;
            $displayData['MenuList']=$displayData['MenuList'];
            $displayData['aa']='bb';
            return View::make('Vendor-Admin::login.index')->with('displayData',$displayData);
        }
    }

}

