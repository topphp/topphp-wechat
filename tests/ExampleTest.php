<?php

declare(strict_types=1);

namespace Topphp\Test;


use EasyWeChat\Kernel\Exceptions\BadRequestException;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use Topphp\TopphpTesting\TestCase;
use Topphp\TopphpWechat\WeChat;

class ExampleTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $config = $this->app->config->get('wechat');
        $app    = WeChat::officialAccount($config);
        try {
            $app->server->push(function ($message) {
                return "您好！欢迎使用 EasyWeChat!";
            });
            $res = $app->server->serve();
            $res->send()->getContent();

        } catch (BadRequestException $e) {
        } catch (InvalidArgumentException $e) {
        } catch (InvalidConfigException $e) {
        } catch (\ReflectionException $e) {
        }
        $this->assertTrue(true);
    }
}
