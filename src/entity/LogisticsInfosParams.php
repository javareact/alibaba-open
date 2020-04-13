<?php


namespace JavaReact\AlibabaOpen\entity;

class LogisticsInfosParams extends BaseEntityParams
{
    private $orderId;
    private $fields;
    private $webSite = '1688';

    /**
     * LogisticsInfosParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param string $webSite
     * @return LogisticsInfosParams
     */
    public function setWebSite(string $webSite): LogisticsInfosParams
    {
        $this->webSite = $webSite;
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