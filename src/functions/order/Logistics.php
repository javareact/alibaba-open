<?php

namespace JavaReact\AlibabaOpen\functions\order;

use JavaReact\AlibabaOpen\core\BaseClient;
use JavaReact\AlibabaOpen\entity\LogisticsInfosParams;
use JavaReact\AlibabaOpen\entity\LogisticsTraceInfoParams;

/**
 * 物流模块
 * @package JavaReact\AlibabaOpen\functions\order
 */
class Logistics extends BaseClient
{
    /**
     * 获取交易订单的物流信息(买家视角)
     * @param LogisticsInfosParams $logisticsInfosParams
     * @return $this
     */
    public function getLogisticsInfos(LogisticsInfosParams $logisticsInfosParams)
    {
        $this->app->params = $logisticsInfosParams->build();
        $this->url_info    = 'com.alibaba.logistics:alibaba.trade.getLogisticsInfos.buyerView-1';
        return $this;
    }

    /**
     * 获取交易订单的物流跟踪信息(买家视角)
     * @param LogisticsTraceInfoParams $logisticsTraceInfoParams
     * @return $this
     */
    public function getLogisticsTraceInfo(LogisticsTraceInfoParams $logisticsTraceInfoParams)
    {
        $this->app->params = $logisticsTraceInfoParams->build();
        $this->url_info    = 'com.alibaba.logistics:alibaba.trade.getLogisticsTraceInfo.buyerView-1';
        return $this;
    }

    /**
     * 物流公司列表-自联物流
     * @return $this
     */
    public function queryLogisticCompanyListOffline()
    {
        //此接口无应用参数
        $this->url_info = 'com.alibaba.logistics:alibaba.logistics.OpQueryLogisticCompanyList.offline-1';
        return $this;
    }

    /**
     * 物流公司列表-所有的物流公司
     * @return $this
     */
    public function queryLogisticCompanyList()
    {
        //此接口无应用参数
        $this->url_info = 'com.alibaba.logistics:alibaba.logistics.OpQueryLogisticCompanyList-1';
        return $this;
    }
}