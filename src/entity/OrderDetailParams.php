<?php

namespace JavaReact\AlibabaOpen\entity;

class OrderDetailParams extends BaseEntityParams
{
    private $webSite = '1688';
    private $orderId;
    private $includeFields;
    private $attributeKeys;

    /**
     * OrderDetailParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param string $webSite
     * @return OrderDetailParams
     */
    public function setWebSite(string $webSite): OrderDetailParams
    {
        $this->webSite = $webSite;
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