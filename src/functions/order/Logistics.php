<?php

namespace JavaReact\AlibabaOpen\functions\order;

use JavaReact\AlibabaOpen\core\BaseClient;
use JavaReact\AlibabaOpen\entity\AddressCodeChildParams;
use JavaReact\AlibabaOpen\entity\AddressCodeGetParams;
use JavaReact\AlibabaOpen\entity\AddressCodeParseParams;
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

    /**
     * 获取交易地址的下一级信息，如果code不输入，返回最上层的地址列表
     * @param AddressCodeChildParams $addressCodeChildParams
     * @return $this
     * @deprecated
     */
    public function addressCodeChild(AddressCodeChildParams $addressCodeChildParams)
    {
        $this->app->params = $addressCodeChildParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.addresscode.getchild-1';
        return $this;
    }

    /**
     * 获取交易地址代码表详情
     * @param AddressCodeGetParams $addressCodeGetParams
     * @return $this
     */
    public function addressCodeGet(AddressCodeGetParams $addressCodeGetParams)
    {
        $this->app->params = $addressCodeGetParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.addresscode.get-1';
        return $this;
    }

    /**
     * 根据地址解析地区码
     *
     * @param AddressCodeParseParams $addressCodeParseParams
     * @return $this
     * @deprecated
     */
    public function addressCodeParse(AddressCodeParseParams $addressCodeParseParams)
    {
        $this->app->params = $addressCodeParseParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.addresscode.parse-1';
        return $this;
    }
}