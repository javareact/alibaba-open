<?php

namespace JavaReact\AlibabaOpen\entity;

class ProtocolPayParams extends BaseEntityParams
{
    private $orderId;

    /**
     * ProtocolPayParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }

}