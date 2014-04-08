<?php
namespace Models;
use \Eloquent;
class Article extends Eloquent{
    protected $table = 'article';
    //protected $fillable = array('ID','Name','Path');
    private $rules = array();
    private $errors;

    //一对多关系
    public function ArticleCategory(){
        return $this->hasMany('\Models\ArticleCategory', 'id','article_category_id');
    }
}

