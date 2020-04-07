<?php


namespace JavaReact\AlibabaOpen\entity;


class UploadRefundVoucherParams extends BaseEntityParams
{
    public $imageData;

    /**
     * UploadRefundVoucherParams constructor.
     * @param $imageData
     */
    public function __construct($imageData)
    {
        //fixme 不参与签名,类型为byte[]
        $this->imageData = $imageData;
    }

}