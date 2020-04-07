<?php


namespace JavaReact\AlibabaOpen\entity;


class ProductFollowParams extends BaseEntityParams
{

    private $productId;

    /**
     * @param mixed $productId
     * @return ProductFollowParams
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
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