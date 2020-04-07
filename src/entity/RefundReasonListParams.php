<?php


namespace JavaReact\AlibabaOpen\entity;


class RefundReasonListParams extends BaseEntityParams
{
    private $orderId;
    private $orderEntryIds;
    private $goodsStatus;

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

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }

}