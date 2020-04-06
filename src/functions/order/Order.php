<?php

namespace JavaReact\AlibabaOpen\functions\order;

use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * 订单模块
 * @package JavaReact\AlibabaOpen\functions\order
 */
class Order extends BaseClient
{
    /**
     * 订单列表
     * @return $this
     */
    public function buyerOrderList()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.getBuyerOrderList-1';
        return $this;
    }

    /**
     * 订单详情(买家视角)
     * @return $this
     */
    public function buyerOrderDetail()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
        return $this;
    }

    /**
     * 溢价模式创建订单前预览数据接口
     * @return $this
     */
    public function preview4CybMedia()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.createOrder.preview4CybMedia-1';
        return $this;
    }

    /**
     * 溢价模式订单创建接口
     * @return $this
     */
    public function createOrder4CybMedia()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.createOrder4CybMedia-1';
        return $this;
    }

    /**
     * 支付宝协议代扣支付
     * @return $this
     */
    public function protocolPay()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.pay.protocolPay-1';
        return $this;
    }

    /**
     * 取消交易
     * @return $this
     */
    public function cancelTrade()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.cancel-1';
        return $this;
    }

}
