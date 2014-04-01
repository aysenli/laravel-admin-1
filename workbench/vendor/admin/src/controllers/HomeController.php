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
 
}

