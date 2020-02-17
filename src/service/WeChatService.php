<?php
/**
 * 凯拓软件 [临渊羡鱼不如退而结网,凯拓与你一同成长]
 * Project: topphp-wechat
 * Date: 2020/2/17 23:53
 * Author: sleep <sleep@kaituocn.com>
 */
declare(strict_types=1);

namespace Topphp\TopphpWechat\service;

use think\Service;
use Topphp\TopphpWechat\WeChat;

class WeChatService extends Service
{
    public function register()
    {
        var_dump('WeChatService:register');
        $this->app->make(WeChat::class);
    }
}
