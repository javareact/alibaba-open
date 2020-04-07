<?php

namespace JavaReact\AlibabaOpen\entity;

class OrderDetailParams extends BaseEntityParams
{
    public $webSite;
    public $orderId;
    public $includeFields;
    public $attributeKeys;

    /**
     * @param mixed $webSite
     * @return OrderDetailParams
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
        return $this;
    }

    /**
     * @param mixed $orderId
     * @return OrderDetailParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param mixed $includeFields
     * @return OrderDetailParams
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }

    /**
     * @param mixed $attributeKeys
     * @return OrderDetailParams
     */
    public function setAttributeKeys($attributeKeys)
    {
        $this->attributeKeys = $attributeKeys;
        return $this;
    }

}