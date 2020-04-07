<?php

namespace JavaReact\AlibabaOpen\entity;

class ReturnGoodsParams extends BaseEntityParams
{
    private $refundId;
    private $logisticsCompanyNo;
    private $freightBill;
    private $description;
    private $vouchers;

    /**
     * ReturnGoodsParams constructor.
     * @param $refundId
     * @param $logisticsCompanyNo
     * @param $freightBill
     */
    public function __construct($refundId, $logisticsCompanyNo, $freightBill)
    {
        $this->refundId           = $refundId;
        $this->logisticsCompanyNo = $logisticsCompanyNo;
        $this->freightBill        = $freightBill;
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

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }

}