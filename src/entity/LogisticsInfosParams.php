<?php


namespace JavaReact\AlibabaOpen\entity;

class LogisticsInfosParams extends BaseEntityParams
{
    public $orderId;
    public $fields;
    public $webSite;

    /**
     * @param mixed $orderId
     * @return LogisticsInfosParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param mixed $fields
     * @return LogisticsInfosParams
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param mixed $webSite
     * @return LogisticsInfosParams
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
        return $this;
    }

}