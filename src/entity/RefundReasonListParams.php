<?php


namespace JavaReact\AlibabaOpen\entity;


class RefundReasonListParams extends BaseEntityParams
{
    public $orderId;
    public $orderEntryIds;
    public $goodsStatus;

    /**
     * RefundReasonListParams constructor.
     * @param $orderId
     * @param $orderEntryIds
     * @param $goodsStatus
     */
    public function __construct($orderId, $orderEntryIds, $goodsStatus)
    {
        $this->orderId       = $orderId;
        $this->orderEntryIds = $orderEntryIds;
        $this->goodsStatus   = $goodsStatus;
    }
}