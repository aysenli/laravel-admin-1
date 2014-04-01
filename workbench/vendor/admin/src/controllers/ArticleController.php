<?php
namespace Vendor\Admin;
use Vendor\Admin\HomeController;
use View;
class ArticleController extends HomeController {
    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
        $displayData=$this->_displayData;
        $displayData['MenuList']=$displayData['MenuList'];
        $displayData['aa']='bb';
        return View::make('Vendor-Admin::article.index')->with('displayData',$displayData);
    }

}

