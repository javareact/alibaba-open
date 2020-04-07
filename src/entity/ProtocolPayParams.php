<?php

namespace JavaReact\AlibabaOpen\entity;

class ProtocolPayParams extends BaseEntityParams
{
    public $orderId;

    /**
     * @param mixed $orderId
     * @return ProtocolPayParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

}