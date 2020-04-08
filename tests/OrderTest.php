<?php

namespace Test\AlibabaOpen;

use JavaReact\AlibabaOpen\AlibabaClient;
use JavaReact\AlibabaOpen\entity\CpsMediaProductInfoParams;
use JavaReact\AlibabaOpen\entity\QueryOfferDetailActivityParams;
use JavaReact\AlibabaOpen\entity\UploadRefundVoucherParams;

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

    /**
     * 测试关注商品
     */
    public function testFollow()
    {
        $obj = new AlibabaClient([
            'productId' => '532137286888',
        ]);
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->order->setApi('com.alibaba.product:alibaba.product.follow-1')->post(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertStringContainsString('0', $res['code']);
    }

    /**
     *  测试获取商品详情接口
     */
    public function testProductInfo()
    {
        $obj = new AlibabaClient;
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->cpsMediaProductInfo(new CpsMediaProductInfoParams('532137286888'))->post(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertStringContainsString('0', $res['code']);
    }

    /**
     * 测试上传图片
     */
    public function testUpload()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $img = file_get_contents('https://h2.appsimg.com/a.appsimg.com/upload/merchandise/pdcvis/603409/2020/0327/6/14bfed3d-42b2-4e89-8dd3-96059dcff849_420_531_292x372_90.jpg');
        $res = $obj->refund->uploadRefundVoucher((new UploadRefundVoucherParams($img)))->post();
        var_export($res);
        $this->assertStringContainsString('true', $res['result']['success']);
    }

    /**
     * 测试营销活动接口
     */
    public function testQueryOfferDetailActivity()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->queryOfferDetailActivity(new QueryOfferDetailActivityParams('532137286888'))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertStringContainsString('true', $res['result']['success']);
    }
}