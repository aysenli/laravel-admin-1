<?php
namespace Models;
use \Eloquent;
class ArticleCategory extends Eloquent{
    protected $table = 'article_category';
    //protected $fillable = array('ID','Name','Path');
    private $rules = array();
    private $errors;
}


