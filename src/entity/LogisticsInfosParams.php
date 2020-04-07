<?php


namespace JavaReact\AlibabaOpen\entity;

class LogisticsInfosParams extends BaseEntityParams
{
    public $orderId;
    public $fields;
    public $webSite;

    /**
     * LogisticsInfosParams constructor.
     * @param $orderId
     * @param $webSite
     */
    public function __construct($orderId, $webSite)
    {
        $this->orderId = $orderId;
        $this->webSite = $webSite;
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

}