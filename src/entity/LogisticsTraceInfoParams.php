<?php

namespace JavaReact\AlibabaOpen\entity;

class LogisticsTraceInfoParams extends BaseEntityParams
{
    public $logisticsId;

    public $orderId;

    public $webSite;

    /**
     * @param mixed $logisticsId
     * @return LogisticsTraceInfoParams
     */
    public function setLogisticsId($logisticsId)
    {
        $this->logisticsId = $logisticsId;
        return $this;
    }

    /**
     * @param mixed $orderId
     * @return LogisticsTraceInfoParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param mixed $webSite
     * @return LogisticsTraceInfoParams
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
        return $this;
    }


}