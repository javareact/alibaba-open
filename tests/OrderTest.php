<?php

namespace Test\AlibabaOpen;

use JavaReact\AlibabaOpen\AlibabaClient;
use JavaReact\AlibabaOpen\entity\AddressCodeGetParams;
use JavaReact\AlibabaOpen\entity\CpsMediaProductInfoParams;
use JavaReact\AlibabaOpen\entity\GetCategoryByIdParams;
use JavaReact\AlibabaOpen\entity\ListCybUserGroupFeedParams;
use JavaReact\AlibabaOpen\entity\ListCybUserGroupParams;
use JavaReact\AlibabaOpen\entity\ListOverPricedOfferParams;
use JavaReact\AlibabaOpen\entity\LogisticsInfosParams;
use JavaReact\AlibabaOpen\entity\LogisticsTraceInfoParams;
use JavaReact\AlibabaOpen\entity\OrderDetailParams;
use JavaReact\AlibabaOpen\entity\ProtocolPayParams;
use JavaReact\AlibabaOpen\entity\QueryOfferDetailActivityParams;
use JavaReact\AlibabaOpen\entity\QueryOrderRefundOperationListParams;
use JavaReact\AlibabaOpen\entity\QueryOrderRefundParams;
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
        $res = $obj->product->cpsMediaProductInfo(new CpsMediaProductInfoParams('579348351942'))->post(); //api 就是阿里巴巴文档中的
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
        $res = $obj->refund->uploadRefundVoucher((new UploadRefundVoucherParams(base64_encode($img))))->post();
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
        $res = $obj->product->queryOfferDetailActivity(new QueryOfferDetailActivityParams('560027245123'))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertStringContainsString('true', $res['result']['success']);
    }

    public function testGetCategoryById()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->getCategoryById(new GetCategoryByIdParams(123284012))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertStringContainsString('true', $res['result']['success']);
    }

    /**
     * 读取已选选品库
     */
    public function testListUserFeed()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->listCybUserGroupFeed((new ListCybUserGroupFeedParams(1, 50))->setGroupId(0))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
//        $this->assertStringContainsString('true', $res['result']['success']);
    }

    /**
     * 获取我的选品库列表
     */
    public function testListCybUserGroup()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->listCybUserGroup((new ListCybUserGroupParams(1, 50)))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
//        $this->assertStringContainsString('true', $res['result']['success']);
    }

    /**
     * 获取交易地址代码表详情
     */
    public function testAddressCodeChild()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->logistics->addressCodeGet((new AddressCodeGetParams(110100)))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
//        $this->assertStringContainsString('true', $res['result']['success']);
    }

    public function testListGoods()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->product->listOverPricedOffer((new ListOverPricedOfferParams(1, 10))->setOfferIds('542833671651'))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
    }

    /**
     * 获取订单详情
     */
    public function testOrderDetail()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->order->buyerOrderDetail((new OrderDetailParams('954134946027629634')))->get(); //api 就是阿里巴巴文档中的
        var_export($res);
        $this->assertSame($res['result']['baseInfo']['status'], 'waitsellersend');
    }

    /**
     * 向1688发起协议扣款
     */
    public function testProtocolPay()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->order->protocolPay((new ProtocolPayParams('950325986749629634')))->get();
        var_export($res);
    }

    /**
     * 查看退款详情
     */
    public function testRefundDetail()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->refund->queryOrderRefund((new QueryOrderRefundParams ('TQ60534051609623496')))->get();
        var_export($res);
    }

    /**
     * 查看退款操作记录
     */
    public function testQueryOrderRefundOperationList()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->refund->queryOrderRefundOperationList((new QueryOrderRefundOperationListParams ('TQ60534051609623496', 1, 10)))->get();
        var_export($res);
    }

    public function testGetLogisticsInfos()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->logistics->getLogisticsInfos((new LogisticsInfosParams('954134946027629634')))->get();
        var_export($res['result'][0]['logisticsCompanyName']);
        var_export($res['result'][0]['logisticsBillNo']);
        var_export($res['result'][0]['logisticsId']);
        var_export($res['result'][0]['status']);
        var_export($res);
    }

    public function testGetLogisticsTraceInfo()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $res = $obj->logistics->getLogisticsTraceInfo((new LogisticsTraceInfoParams('954134946027629634')))->get();
        var_export($res);
    }
}