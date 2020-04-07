<?php

namespace JavaReact\AlibabaOpen\entity;

class OrderDetailParams extends BaseEntityParams
{
    public $webSite;
    public $orderId;
    public $includeFields;
    public $attributeKeys;

    /**
     * OrderDetailParams constructor.
     * @param $webSite
     * @param $orderId
     */
    public function __construct($webSite, $orderId)
    {
        $this->webSite = $webSite;
        $this->orderId = $orderId;
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