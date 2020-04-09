<?php


namespace JavaReact\AlibabaOpen\entity;

class LogisticsInfosParams extends BaseEntityParams
{
    private $orderId;
    private $fields;
    private $webSite;

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