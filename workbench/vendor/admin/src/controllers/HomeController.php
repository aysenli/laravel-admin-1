<?php
namespace Vendor\Admin;
use \Controller;
use View;
class HomeController extends Controller {
    protected $layout = 'Vendor-Admin::layouts.main';
    protected $_displayData=array();
    public function __construct(){
        $admin_menu=new \Models\AdminMenu;
        $list=$admin_menu->all();;
        $list=$list->toArray();
        $Tools= new \Library\Tools;
        $list=$Tools::ArrayFormartByKey($list,'id');
        $list=$admin_menu->getMeunTree($list);
        $this->_displayData['MenuList']=$list;
    }
    public function message($title,$content,$delay_time,$target_url){
        $this->layout=false;
        $displayData['title']=$title;
        $displayData['content']=$content;
        $displayData['delay_time']=empty($delay_time)?3:$delay_time;
        $displayData['target_url']=$target_url;
        return View::make('Vendor-Admin::common.message')->with('displayData',$displayData);
    }
}

