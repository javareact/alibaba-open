<?php


namespace JavaReact\AlibabaOpen\functions\order;


use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * Class Order
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
     * 订单详情
     */
    public function buyerOrderDetail()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
    }


}
