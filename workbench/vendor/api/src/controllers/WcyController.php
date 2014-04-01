<?php
namespace Vendor\Api;
use Vendor\Api\HomeController;
use \Models\Images;
use Input, Notification, Redirect, Sentry, Str;
class WcyController extends HomeController {

    public function __construct(){
        parent::__construct();
    }
 
    
    public function getGetAll(){
       
        $images = new Images();
        $params['page'] = Input::get('page',1);
        $params['uid'] = Input::get('uid','');
        $params['status'] = Input::get('status','1');
        $params['id'] = Input::get('id','');
        $params['psize'] = Input::get('psize','14');
       
        //$list=$images::where('AutherID','=','1')->where('Status','=','1')->take(10)->paginate(2);
        $list=$images->getAll($params);
        var_dump($list->toArray());

        /* foreach($list as $k){
        var_dump($k->Name);
        } */

    }

}
