<?php

namespace JavaReact\AlibabaOpen\entity;

class LogisticsTraceInfoParams extends BaseEntityParams
{
    public $logisticsId;

    public $orderId;

    public $webSite;

    /**
     * LogisticsTraceInfoParams constructor.
     * @param $orderId
     * @param $webSite
     */
    public function __construct($orderId, $webSite)
    {
        $this->orderId = $orderId;
        $this->webSite = $webSite;
    }


    /**
     * @param mixed $logisticsId
     * @return LogisticsTraceInfoParams
     */
    public function setLogisticsId($logisticsId)
    {
        $this->logisticsId = $logisticsId;
        return $this;
    }

}