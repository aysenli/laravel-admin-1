<?php
namespace Library;
/**
    * @file Tools.php
    * @brief 工具类
    * @author UGV0ZXI=, Y3lva3ZpcEBnbWFpbC5jb20=
    * @version 1
    * @date 2014-04-01
 */
class Tools{

    /**
        * @brief ArrayFormartByKey 数组格式化，用key作为键值
        *
        * @param $array
        * @param $key
        *
        * @return 
     */
    public  static function ArrayFormartByKey($array,$key){
        $new_array=array();
        if(is_array($array) && !empty($array)){
            foreach($array as $k){
                $new_array[$k[$key]]=$k;
            }
        }
        return $new_array;
    }
}

