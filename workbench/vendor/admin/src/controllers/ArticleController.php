<?php
namespace Vendor\Admin;
use Vendor\Admin\HomeController;
use View,Input,Redirect;
class ArticleController extends HomeController {
    public function __construct(){
        parent::__construct();
    }

	public function index(){
        $displayData=$this->_displayData;
        $article=new \Models\Article;
        $article_result=$article->orderBy('id','desc')->paginate(2);

        $displayData['MenuList']=$displayData['MenuList'];
        $displayData['article']=$article_result;
        return View::make('Vendor-Admin::article.index')->with('displayData',$displayData);
    }
    public function add(){

        if(Input::has('title')){
            $post_all=Input::all();
            $article=new \Models\Article;
            $article->title=Input::get('title');
            $article->content=Input::get('content');
            $article->article_category_id=1;
            $article->save();
            return Redirect::to(asset('admin/article/index'));
        }else{
            $displayData=$this->_displayData;
            return View::make('Vendor-Admin::article.add')->with('displayData',$displayData);
        }
    }

}

