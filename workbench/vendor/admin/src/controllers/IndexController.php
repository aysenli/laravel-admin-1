<?php
namespace Vendor\Admin;
use Vendor\Admin\HomeController;
use View;
class IndexController extends HomeController {
    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
        $displayData=$this->_displayData;
        $displayData['MenuList']=$displayData['MenuList'];
        $displayData['aa']='bb';
        return View::make('Vendor-Admin::index.index')->with('displayData',$displayData);
    }

}

