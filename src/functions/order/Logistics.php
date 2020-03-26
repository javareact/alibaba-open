<?php

namespace JavaReact\AlibabaOpen\functions\order;

use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * 物流
 * Class Logistics
 * @package JavaReact\AlibabaOpen\functions\order
 */
class Logistics extends BaseClient
{
    /**
     * 获取交易订单的物流信息(买家视角)
     * @return $this
     */
    public function getLogisticsInfos()
    {
        $this->url_info = 'com.alibaba.logistics:alibaba.trade.getLogisticsInfos.buyerView-1';
        return $this;
    }

    /**
     * 获取交易订单的物流跟踪信息(买家视角)
     */
    public function getLogisticsTraceInfo()
    {
        $this->url_info = 'com.alibaba.logistics:alibaba.trade.getLogisticsTraceInfo.buyerView-1';
        return $this;
    }
}