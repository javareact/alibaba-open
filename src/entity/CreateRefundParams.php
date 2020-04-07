<?php


namespace JavaReact\AlibabaOpen\entity;


class CreateRefundParams extends BaseEntityParams
{
    public $orderId;
    public $orderEntryIds;
    public $disputeRequest;
    public $applyPayment;
    public $applyCarriage;
    public $applyReasonId;
    public $description;
    public $goodsStatus;
    public $vouchers;
    public $orderEntryCountList;

    /**
     * @param mixed $orderId
     * @return CreateRefundParams
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param mixed $orderEntryIds
     * @return CreateRefundParams
     */
    public function setOrderEntryIds($orderEntryIds)
    {
        $this->orderEntryIds = $orderEntryIds;
        return $this;
    }

    /**
     * @param mixed $disputeRequest
     * @return CreateRefundParams
     */
    public function setDisputeRequest($disputeRequest)
    {
        $this->disputeRequest = $disputeRequest;
        return $this;
    }

    /**
     * @param mixed $applyPayment
     * @return CreateRefundParams
     */
    public function setApplyPayment($applyPayment)
    {
        $this->applyPayment = $applyPayment;
        return $this;
    }

    /**
     * @param mixed $applyCarriage
     * @return CreateRefundParams
     */
    public function setApplyCarriage($applyCarriage)
    {
        $this->applyCarriage = $applyCarriage;
        return $this;
    }

    /**
     * @param mixed $applyReasonId
     * @return CreateRefundParams
     */
    public function setApplyReasonId($applyReasonId)
    {
        $this->applyReasonId = $applyReasonId;
        return $this;
    }

    /**
     * @param mixed $description
     * @return CreateRefundParams
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $goodsStatus
     * @return CreateRefundParams
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus = $goodsStatus;
        return $this;
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


}