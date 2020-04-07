<?php


namespace JavaReact\AlibabaOpen\entity;


class OrderListParams extends BaseEntityParams
{
    public $bizTypes;
    public $createEndTime;
    public $createStartTime;
    public $isHis;
    public $modifyEndTime;
    public $modifyStartTime;
    public $orderStatus;
    public $page;
    public $pageSize;
    public $refundStatus;
    public $sellerMemberId;
    public $sellerRateStatus;
    public $tradeType;
    public $productName;
    public $needBuyerAddressAndPhone;
    public $needMemoInfo;

    /**
     * @param mixed $bizTypes
     * @return OrderListParams
     */
    public function setBizTypes($bizTypes)
    {
        $this->bizTypes = $bizTypes;
        return $this;
    }

    /**
     * @param mixed $createEndTime
     * @return OrderListParams
     */
    public function setCreateEndTime($createEndTime)
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * @param mixed $createStartTime
     * @return OrderListParams
     */
    public function setCreateStartTime($createStartTime)
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * @param mixed $isHis
     * @return OrderListParams
     */
    public function setIsHis($isHis)
    {
        $this->isHis = $isHis;
        return $this;
    }

    /**
     * @param mixed $modifyEndTime
     * @return OrderListParams
     */
    public function setModifyEndTime($modifyEndTime)
    {
        $this->modifyEndTime = $modifyEndTime;
        return $this;
    }

    /**
     * @param mixed $modifyStartTime
     * @return OrderListParams
     */
    public function setModifyStartTime($modifyStartTime)
    {
        $this->modifyStartTime = $modifyStartTime;
        return $this;
    }

    /**
     * @param mixed $orderStatus
     * @return OrderListParams
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @param mixed $page
     * @return OrderListParams
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param mixed $pageSize
     * @return OrderListParams
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param mixed $refundStatus
     * @return OrderListParams
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    /**
     * @param mixed $sellerMemberId
     * @return OrderListParams
     */
    public function setSellerMemberId($sellerMemberId)
    {
        $this->sellerMemberId = $sellerMemberId;
        return $this;
    }

    /**
     * @param mixed $sellerRateStatus
     * @return OrderListParams
     */
    public function setSellerRateStatus($sellerRateStatus)
    {
        $this->sellerRateStatus = $sellerRateStatus;
        return $this;
    }

    /**
     * @param mixed $tradeType
     * @return OrderListParams
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        return $this;
    }

    /**
     * @param mixed $productName
     * @return OrderListParams
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @param mixed $needBuyerAddressAndPhone
     * @return OrderListParams
     */
    public function setNeedBuyerAddressAndPhone($needBuyerAddressAndPhone)
    {
        $this->needBuyerAddressAndPhone = $needBuyerAddressAndPhone;
        return $this;
    }

    /**
     * @param mixed $needMemoInfo
     * @return OrderListParams
     */
    public function setNeedMemoInfo($needMemoInfo)
    {
        $this->needMemoInfo = $needMemoInfo;
        return $this;
    }


}