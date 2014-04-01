<?php
namespace Models;
use \Eloquent;
class Images extends Eloquent{
    protected $table = 'Image';
    protected $fillable = array('ID','Name','Path');
    private $rules = array();
    private $errors;

    public function getAll($params){
        $page=isset($params['page'])?$params['page']:'';
        $psize=isset($params['psize'])?$params['psize']:'';
        $status=isset($params['status'])?$params['status']:'';
        $autherid=isset($params['autherid'])?$params['autherid']:'';
        $type=isset($params['type'])?$params['type']:'';
        $schoolid=isset($params['schoolid'])?$params['schoolid']:'';
        
        if($autherid<>''){
            $images=$this->where('AutherID','=',$autherid);
        }
        if($status<>''){
            $images=$this->where('Status','=',$status);
        }
        if($type<>''){
            $images=$this->where('Type','=',$type);
        }
        if($schoolid<>''){
            $images=$this->where('SchoolID','=',$schoolid);
        }
        $list=$images->take($page)->paginate($psize);
        return $list->toArray();
    }

}

