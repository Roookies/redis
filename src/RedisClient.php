<?php
namespace Roookies;
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/7/4
 * Time: 上午11:00
 */
class RedisClient
{
    static $redis;
    public function __construct()
    {
        self::$redis = new \Redis();
        self::$redis ->connect(env('REDIS_HOST'), env('REDIS_PORT'));
    }

    public static function is_connect(){

    }

    public function set($key,$value){
        $bool = self::$redis->set($key,$value);
        if($bool){
            return true;
        }else{
            return false;
        }
    }

    public  function get($key){
        $value = self::$redis->get($key);
        if(!empty($value)){
            return $value;
        }else{
            return false;
        }
    }

    public static function is_exist($key){

    }

}