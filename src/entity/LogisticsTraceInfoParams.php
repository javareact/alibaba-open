<?php

namespace JavaReact\AlibabaOpen\entity;

class LogisticsTraceInfoParams extends BaseEntityParams
{
    private $logisticsId;
    private $orderId;
    private $webSite = '1688';

    /**
     * LogisticsTraceInfoParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param string $webSite
     * @return LogisticsTraceInfoParams
     */
    public function setWebSite(string $webSite): LogisticsTraceInfoParams
    {
        $this->webSite = $webSite;
        return $this;
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
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }

}