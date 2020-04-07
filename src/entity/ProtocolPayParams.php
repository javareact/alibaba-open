<?php

namespace JavaReact\AlibabaOpen\entity;

class ProtocolPayParams extends BaseEntityParams
{
    public $orderId;

    /**
     * ProtocolPayParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }
}