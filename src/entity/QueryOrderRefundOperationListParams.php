<?php


namespace JavaReact\AlibabaOpen\entity;


class QueryOrderRefundOperationListParams extends BaseEntityParams
{
    private $refundId;
    private $pageNo;
    private $pageSize;

    /**
     * QueryOrderRefundOperationListParams constructor.
     * @param $refundId
     * @param $pageNo
     * @param $pageSize
     */
    public function __construct($refundId, $pageNo, $pageSize)
    {
        $this->refundId = $refundId;
        $this->pageNo   = $pageNo;
        $this->pageSize = $pageSize;
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