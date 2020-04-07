<?php


namespace JavaReact\AlibabaOpen\entity;


class ReturnGoodsParams extends BaseEntityParams
{
    public $refundId;
    public $logisticsCompanyNo;
    public $freightBill;
    public $description;
    public $vouchers;

    /**
     * @param mixed $refundId
     * @return ReturnGoodsParams
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }

    /**
     * @param mixed $logisticsCompanyNo
     * @return ReturnGoodsParams
     */
    public function setLogisticsCompanyNo($logisticsCompanyNo)
    {
        $this->logisticsCompanyNo = $logisticsCompanyNo;
        return $this;
    }

    /**
     * @param mixed $freightBill
     * @return ReturnGoodsParams
     */
    public function setFreightBill($freightBill)
    {
        $this->freightBill = $freightBill;
        return $this;
    }

    /**
     * @param mixed $description
     * @return ReturnGoodsParams
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $vouchers
     * @return ReturnGoodsParams
     */
    public function setVouchers($vouchers)
    {
        $this->vouchers = $vouchers;
        return $this;
    }

}