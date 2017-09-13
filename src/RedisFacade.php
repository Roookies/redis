<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/9/12
 * Time: 下午6:33
 */

namespace Roookies;


use Illuminate\Support\Facades\Facade;
class RedisFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
