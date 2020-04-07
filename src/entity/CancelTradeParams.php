<?php


namespace JavaReact\AlibabaOpen\entity;


class CancelTradeParams extends BaseEntityParams
{
    public $webSite;
    public $tradeID;
    public $cancelReason;
    public $remark;

    /**
     * CancelTradeParams constructor.
     * @param $webSite
     * @param $tradeID
     * @param $cancelReason
     */
    public function __construct($webSite, $tradeID, $cancelReason)
    {
        $this->webSite      = $webSite;
        $this->tradeID      = $tradeID;
        $this->cancelReason = $cancelReason;
    }

    /**
     * @param mixed $remark
     * @return CancelTradeParams
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

}