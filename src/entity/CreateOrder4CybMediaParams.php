<?php

namespace JavaReact\AlibabaOpen\entity;

class CreateOrder4CybMediaParams extends BaseEntityParams
{
    public $addressParam;
    public $cargoParamList;
    public $message;
    public $outerOrderInfo;
    public $tradeType;
    public $useChannelPrice;

    /**
     * @param mixed $addressParam
     * @return CreateOrder4CybMediaParams
     */
    public function setAddressParam($addressParam)
    {
        $this->addressParam = $addressParam;
        return $this;
    }

    /**
     * @param mixed $cargoParamList
     * @return CreateOrder4CybMediaParams
     */
    public function setCargoParamList($cargoParamList)
    {
        $this->cargoParamList = $cargoParamList;
        return $this;
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
     * @param mixed $outerOrderInfo
     * @return CreateOrder4CybMediaParams
     */
    public function setOuterOrderInfo($outerOrderInfo)
    {
        $this->outerOrderInfo = $outerOrderInfo;
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

}