<?php
namespace JavaReact\AlibabaOpen\entity;

/**
 * 跨境场景
 *
 * @Author HaierSpi haierspi@qq.com
 * @DateTime 2020-04-13
 */
class CrossProductInfoParam extends BaseEntityParams
{

    private $productId;

    /**
     * ProductFollowParams constructor.
     * @param $productId
     */
    public function __construct($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}
