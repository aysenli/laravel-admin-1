<?php
namespace Models;
use \Eloquent;
class Admin_menu extends Eloquent{
    protected $table = 'admin_menu';
    //protected $fillable = array('ID','Name','Path');
    private $rules = array();
    private $errors;
    
	public function getMeunTree($items) {
		$tree = array(); //格式化好的树
		foreach ($items as $item){
			if (isset($items[$item['pid']])){
				$items[$item['pid']]['children'][] = &$items[$item['id']];
			}else{
				$tree[] = &$items[$item['id']];
			}
		}
		return $tree;
	}
}

