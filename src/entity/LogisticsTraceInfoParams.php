<?php

namespace JavaReact\AlibabaOpen\entity;

class LogisticsTraceInfoParams extends BaseEntityParams
{
    private $logisticsId;
    private $orderId;
    private $webSite;

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

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }

}