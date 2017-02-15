<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2017/2/10
 * Time: 21:30
 */

namespace Hanson\WechatNotice;

use Illuminate\Support\Facades\Facade;

class NoticeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Notice::class;
    }
}