<?php


namespace JavaReact\AlibabaOpen\entity;


class ProductUnfollowParams extends BaseEntityParams
{
    public $productId;

    /**
     * @param mixed $productId
     * @return ProductUnfollowParams
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

}