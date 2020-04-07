<?php

namespace JavaReact\AlibabaOpen\functions\order;

use JavaReact\AlibabaOpen\core\BaseClient;
use JavaReact\AlibabaOpen\entity\CancelTradeParams;
use JavaReact\AlibabaOpen\entity\CreateOrder4CybMediaParams;
use JavaReact\AlibabaOpen\entity\OrderDetailParams;
use JavaReact\AlibabaOpen\entity\OrderListParams;
use JavaReact\AlibabaOpen\entity\Preview4CybMediaParams;
use JavaReact\AlibabaOpen\entity\ProtocolPayParams;

/**
 * 订单模块
 * @package JavaReact\AlibabaOpen\functions\order
 */
class Order extends BaseClient
{
    /**
     * 订单列表
     * @param OrderListParams $orderListParams
     * @return $this
     */
    public function buyerOrderList(OrderListParams $orderListParams)
    {
        $this->app->params = $orderListParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.getBuyerOrderList-1';
        return $this;
    }

    /**
     * 订单详情(买家视角)
     * @param OrderDetailParams $orderDetailParams
     * @return $this
     */
    public function buyerOrderDetail(OrderDetailParams $orderDetailParams)
    {
        $this->app->params = $orderDetailParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
        return $this;
    }

    /**
     * 溢价模式创建订单前预览数据接口
     * @param Preview4CybMediaParams $preview4CybMediaParams
     * @return $this
     */
    public function preview4CybMedia(Preview4CybMediaParams $preview4CybMediaParams)
    {
        $this->app->params = $preview4CybMediaParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.createOrder.preview4CybMedia-1';
        return $this;
    }

    /**
     * 溢价模式订单创建接口
     * @param CreateOrder4CybMediaParams $createOrder4CybMediaParams
     * @return $this
     */
    public function createOrder4CybMedia(CreateOrder4CybMediaParams $createOrder4CybMediaParams)
    {
        $this->app->params = $createOrder4CybMediaParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.createOrder4CybMedia-1';
        return $this;
    }

    /**
     * 支付宝协议代扣支付
     * @param ProtocolPayParams $protocolPayParams
     * @return $this
     */
    public function protocolPay(ProtocolPayParams $protocolPayParams)
    {
        $this->app->params = $protocolPayParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.pay.protocolPay-1';
        return $this;
    }

    /**
     * 取消交易
     * @param CancelTradeParams $cancelTradeParams
     * @return $this
     */
    public function cancelTrade(CancelTradeParams $cancelTradeParams)
    {
        $this->app->params = $cancelTradeParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.cancel-1';
        return $this;
    }

}
