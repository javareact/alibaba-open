<?php


namespace JavaReact\AlibabaOpen\entity;


class RefundReasonListParams extends BaseEntityParams
{
    public $orderId;
    public $orderEntryIds;
    public $goodsStatus;

    /**
     * @param mixed $orderId
     * @return RefundReasonListParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param mixed $orderEntryIds
     * @return RefundReasonListParams
     */
    public function setOrderEntryIds($orderEntryIds)
    {
        $this->orderEntryIds = $orderEntryIds;
        return $this;
    }

    /**
     * @param mixed $goodsStatus
     * @return RefundReasonListParams
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus = $goodsStatus;
        return $this;
    }

}