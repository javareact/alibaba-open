<?php

namespace JavaReact\AlibabaOpen\entity;

class QueryOrderRefundParams extends BaseEntityParams
{
    private $refundId;
    private $needTimeOutInfo;
    private $needOrderRefundOperation;

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

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }
}