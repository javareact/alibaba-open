<?php


namespace JavaReact\AlibabaOpen\entity;


class QueryOrderRefundParams extends BaseEntityParams
{
    public $refundId;
    public $needTimeOutInfo;
    public $needOrderRefundOperation;

    /**
     * @param mixed $refundId
     * @return QueryOrderRefundParams
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
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