<?php

namespace JavaReact\AlibabaOpen\entity;

class CreateOrder4CybMediaParams extends BaseEntityParams
{
    private $addressParam;
    private $cargoParamList;
    private $message;
    private $outerOrderInfo;
    private $tradeType;
    private $useChannelPrice;

    /**
     * CreateOrder4CybMediaParams constructor.
     * @param $addressParam
     * @param $cargoParamList
     * @param $outerOrderInfo
     */
    public function __construct($addressParam, $cargoParamList, $outerOrderInfo)
    {
        $this->addressParam   = $addressParam;
        $this->cargoParamList = $cargoParamList;
        $this->outerOrderInfo = $outerOrderInfo;
    }

    /**
     * @param mixed $message
     * @return CreateOrder4CybMediaParams
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param mixed $tradeType
     * @return CreateOrder4CybMediaParams
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        return $this;
    }

    /**
     * @param mixed $useChannelPrice
     * @return CreateOrder4CybMediaParams
     */
    public function setUseChannelPrice($useChannelPrice)
    {
        $this->useChannelPrice = $useChannelPrice;
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