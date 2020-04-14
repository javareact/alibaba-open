<?php

namespace JavaReact\AlibabaOpen\entity;

class UploadRefundVoucherParams extends BaseEntityParams
{
    private $imageData;

    /**
     * UploadRefundVoucherParams constructor.
     * @param string $imageData file_get_contents返回值base64encode即可
     */
    public function __construct(string $imageData)
    {
        $this->imageData = $imageData;
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