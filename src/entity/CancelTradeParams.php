<?php


namespace JavaReact\AlibabaOpen\entity;


class CancelTradeParams extends BaseEntityParams
{
    private $webSite = '1688';
    private $tradeID;
    private $cancelReason;
    private $remark;

    /**
     * CancelTradeParams constructor.
     * @param $tradeID
     * @param $cancelReason
     */
    public function __construct($tradeID, $cancelReason)
    {
        $this->tradeID      = $tradeID;
        $this->cancelReason = $cancelReason;
    }

    /**
     * @param string $webSite
     * @return CancelTradeParams
     */
    public function setWebSite(string $webSite): CancelTradeParams
    {
        $this->webSite = $webSite;
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