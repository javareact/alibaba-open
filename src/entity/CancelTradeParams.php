<?php


namespace JavaReact\AlibabaOpen\entity;


class CancelTradeParams extends BaseEntityParams
{
    private $webSite;
    private $tradeID;
    private $cancelReason;
    private $remark;

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

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }

}