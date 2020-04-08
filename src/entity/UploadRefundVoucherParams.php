<?php


namespace JavaReact\AlibabaOpen\entity;


class UploadRefundVoucherParams extends BaseEntityParams
{
    private $imageData;

    /**
     * UploadRefundVoucherParams constructor.
     * @param string $imageData file_get_contents返回值即可
     */
    public function __construct(string $imageData)
    {
        $this->imageData = base64_encode($imageData);
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