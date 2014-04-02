<?php
namespace Vendor\Admin;
use Vendor\Admin\HomeController;
use View,Input,Redirect,URL;
class ArticleController extends HomeController {
    public function __construct(){
        parent::__construct();
    }

	public function index(){
        //echo  URL::to('/admin/article/del');
        $displayData=$this->_displayData;
        $article=new \Models\Article;
        $article_result=$article->orderBy('id','desc')->paginate(10);

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
            $article->article_category_id=Input::get('cat');
            $article->save();
            return Redirect::to(asset('admin/article/index'));
        }else{
            $treeHtml=$this->Tree();
            $displayData=$this->_displayData;
            $displayData['treeHtml']=$treeHtml;
            return View::make('Vendor-Admin::article.add')->with('displayData',$displayData);
        }
    }

    public function edit($id){
        $article=new \Models\Article;
        if(Input::has('id')){
            $id=Input::get('id');
            $result=$article::where('id','=',$id)->first();
            $result->title=Input::get('title');
            $result->content=Input::get('content');
            $result->article_category_id=Input::get('cat');
            $result->save();
            return Redirect::to(asset('admin/article/index'));
        
        }else{

            $result=$article::where('id','=',$id)->first()->toArray();
            $treeHtml=$this->Tree();
            $displayData=$this->_displayData;
            $displayData['treeHtml']=$treeHtml;
            $displayData['result']=$result;
            return View::make('Vendor-Admin::article.edit')->with('displayData',$displayData);
        }
    }
    public function del(){
        $this->layout=false;
        if(Input::has('id')){
            $article=new \Models\Article;
            $id=Input::get('id');
            $result=$article::where('id','=',$id)->first();
            $result->delete();
            echo $id;
        }
        exit;
    }

    public function CategoryIndex(){
        $treeHtml=$this->Tree();
        $displayData=$this->_displayData;
        $displayData['treeHtml']=$treeHtml;
        return View::make('Vendor-Admin::article.category_index')->with('displayData',$displayData);
    }

    public function CategoryDel(){
        $this->layout=false;
        if(Input::has('id')){
            $articleCategory=new \Models\ArticleCategory;
            $id=Input::get('id');
            $result=$articleCategory::where('id','=',$id)->first();
            $result->delete();
            echo $id;
            //return Redirect::to(asset('admin/article/article_category'));
        }
        exit;
    }

    /**
        * @brief Tree 树
        *
        * @return 树内容
     */
    private function Tree(){
        $articleCategory=new \Models\ArticleCategory;
        $result=$articleCategory->all()->toArray();
        $Tools= new \Library\Tools;
        $list=$Tools::ArrayFormartByKey($result,'id');
        $Tree= new \Library\Tree($list);
        $treeHtml="<select name='cat' id='cat' class='form-control'>";
        //格式字符串
        $str="<option value=\$id \$selected>\$spacer\$name</option>";
        //返回树
        $treeHtml.=$Tree->get_tree(0,$str);
        $treeHtml.="</select>";
        return $treeHtml;
    }
}

