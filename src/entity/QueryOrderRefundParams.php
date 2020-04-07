<?php

namespace JavaReact\AlibabaOpen\entity;

class QueryOrderRefundParams extends BaseEntityParams
{
    public $refundId;
    public $needTimeOutInfo;
    public $needOrderRefundOperation;

    /**
     * QueryOrderRefundParams constructor.
     * @param $refundId
     */
    public function __construct($refundId)
    {
        $this->refundId = $refundId;
    }

    /**
     * @param mixed $needTimeOutInfo
     * @return QueryOrderRefundParams
     */
    public function setNeedTimeOutInfo($needTimeOutInfo)
    {
        $this->needTimeOutInfo = $needTimeOutInfo;
        return $this;
    }

    /**
     * @param mixed $needOrderRefundOperation
     * @return QueryOrderRefundParams
     */
    public function setNeedOrderRefundOperation($needOrderRefundOperation)
    {
        $this->needOrderRefundOperation = $needOrderRefundOperation;
        return $this;
    }


}