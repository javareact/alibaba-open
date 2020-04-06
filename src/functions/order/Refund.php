<?php


namespace JavaReact\AlibabaOpen\functions\order;


use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * 退货模块
 * @package JavaReact\AlibabaOpen\functions\order
 */
class Refund extends BaseClient
{

    /**
     * 创建退款退货申请
     * @return $this
     */
    public function createRefund()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.createRefund-1';
        return $this;
    }

    /**
     * 查询退款退货原因（用于创建退款退货）
     * @return $this
     */
    public function getRefundReasonList()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.getRefundReasonList-1';
        return $this;
    }

    /**
     * 上传退款退货凭证
     * @return $this
     */
    public function uploadRefundVoucher()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.uploadRefundVoucher-1';
        return $this;
    }

    /**
     * 查询退款单详情-根据退款单ID
     *
     * @return $this
     */
    public function queryOrderRefund()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.refund.OpQueryOrderRefund-1';
        return $this;
    }


    /**
     * 买家提交退款货信息
     *
     * @return $this
     */
    public function returnGoods()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.refund.returnGoods-1';
        return $this;
    }

}