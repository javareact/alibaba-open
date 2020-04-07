<?php


namespace JavaReact\AlibabaOpen\entity;


class UploadRefundVoucherParams extends BaseEntityParams
{
    public $imageData;

    /**
     * @param mixed $imageData
     * @return UploadRefundVoucherParams
     */
    public function setImageData($imageData)
    {
        $this->imageData = $imageData;
        return $this;
    }

}