<?php


namespace JavaReact\AlibabaOpen\entity;


class UploadRefundVoucherParams extends BaseEntityParams
{
    private $imageData;

    /**
     * UploadRefundVoucherParams constructor.
     * @param $imageData
     */
    public function __construct($imageData)
    {
        //fixme 不参与签名,类型为byte[]
        $this->imageData = $imageData;
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