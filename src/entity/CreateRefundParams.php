<?php


namespace JavaReact\AlibabaOpen\entity;


class CreateRefundParams extends BaseEntityParams
{
    private $orderId;
    private $orderEntryIds;
    private $disputeRequest;
    private $applyPayment;
    private $applyCarriage;
    private $applyReasonId;
    private $description;
    private $goodsStatus;
    private $vouchers;
    private $orderEntryCountList;

    /**
     * CreateRefundParams constructor.
     * @param $orderId
     * @param $orderEntryIds
     * @param $disputeRequest
     * @param $applyPayment
     * @param $applyCarriage
     * @param $applyReasonId
     * @param $description
     * @param $goodsStatus
     */
    public function __construct($orderId, $orderEntryIds, $disputeRequest, $applyPayment, $applyCarriage, $applyReasonId, $description, $goodsStatus)
    {
        $this->orderId        = $orderId;
        $this->orderEntryIds  = $orderEntryIds;
        $this->disputeRequest = $disputeRequest;
        $this->applyPayment   = $applyPayment;
        $this->applyCarriage  = $applyCarriage;
        $this->applyReasonId  = $applyReasonId;
        $this->description    = $description;
        $this->goodsStatus    = $goodsStatus;
    }

    /**
     * @param mixed $vouchers
     * @return CreateRefundParams
     */
    public function setVouchers($vouchers)
    {
        $this->vouchers = $vouchers;
        return $this;
    }

    /**
     * @param mixed $orderEntryCountList
     * @return CreateRefundParams
     */
    public function setOrderEntryCountList($orderEntryCountList)
    {
        $this->orderEntryCountList = $orderEntryCountList;
        return $this;
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