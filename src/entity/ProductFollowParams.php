<?php


namespace JavaReact\AlibabaOpen\entity;


class ProductFollowParams extends BaseEntityParams
{

    public $productId;

    /**
     * @param mixed $productId
     * @return ProductFollowParams
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

}