<?php

namespace JavaReact\AlibabaOpen\entity;

class OrderDetailParams extends BaseEntityParams
{
    private $webSite;
    private $orderId;
    private $includeFields;
    private $attributeKeys;

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