<?php

namespace Test\AlibabaOpen;

/**
 * Class OrderTest
 * @internal
 */
class OrderTest extends BaseTest
{

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testIndex()
    {
        $obj = new \JavaReact\AlibabaOpen\AlibabaClient(['page' => 1]);
        $obj->setAppkey('appkey');
        $obj->setAppsecret('appsecret');
        $obj->setAccessToken('access_token');
        $res = $obj->order->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')->post(); //api 就是阿里巴巴文档中的
        $this->assertContains('gw.AppKeyNotFound', $res['error_code']);
    }
}