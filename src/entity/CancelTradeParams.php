<?php


namespace JavaReact\AlibabaOpen\entity;


class CancelTradeParams extends BaseEntityParams
{
    public $webSite;
    public $tradeID;
    public $cancelReason;
    public $remark;

    /**
     * @param mixed $webSite
     * @return CancelTradeParams
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
        return $this;
    }

    /**
     * @param mixed $tradeID
     * @return CancelTradeParams
     */
    public function setTradeID($tradeID)
    {
        $this->tradeID = $tradeID;
        return $this;
    }

    /**
     * @param mixed $cancelReason
     * @return CancelTradeParams
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
        return $this;
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