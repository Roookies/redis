<?php
namespace Roookies;
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/7/4
 * Time: 上午11:00
 */
class Mredis
{
    static $redis;
    public function __construct()
    {
        self::$redis = new \Redis();
        self::$redis ->connect(env('REDIS_HOST'), env('REDIS_PORT'));
    }

    public static function isConnect(){

    }

    public function set($key,$value){
      return self::$redis->set($key,$value)?true:false;
    }

    public  function get($key){
      return empty(self::$redis->get($key))?false:self::$redis->get($key);
    }

    public function isExist($key){
        return self::$redis->exists($key)?true:false;
    }

    public function hset($key,$item,$value){
        return self::$redis->hSet($key,$item,$value)?true:false;
    }

    public function hget($key,$item){
        return empty(self::$redis->hGet($key,$item))?false:self::$redis->hGet($key,$item);
    }

    public function hmset($key,array $array){
        return self::$redis->hMset($key,$array);
    }

}