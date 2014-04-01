<?php
namespace Models;
use \Eloquent;
class Article extends Eloquent{
    protected $table = 'article';
    //protected $fillable = array('ID','Name','Path');
    private $rules = array();
    private $errors;
}

