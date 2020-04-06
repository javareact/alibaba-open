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
        $obj = new \JavaReact\AlibabaOpen\AlibabaClient([
            'productId' => '532137286888',
        ]);
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken(getenv('AccessToken'));
        $res = $obj->order->setApi('com.alibaba.product:alibaba.product.follow-1')->post(); //api 就是阿里巴巴文档中的
        $this->assertStringContainsString('gw.AppKeyNotFound', $res['error_code']);
    }
}