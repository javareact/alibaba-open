<?php

namespace JavaReact\AlibabaOpen\functions\product;

use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * Class Product
 * @package JavaReact\AlibabaOpen\functions\product
 */
class Product extends BaseClient
{
    /**
     * 关注商品
     * @return $this
     */
    public function productFollow()
    {
        $this->url_info = 'com.alibaba.product:alibaba.product.follow-1';
        return $this;
    }

    /**
     * 获取商品详情
     * @return $this
     */
    public function cpsMediaProductInfo()
    {
        $this->url_info = 'com.alibaba.product:alibaba.cpsMedia.productInfo-1';
        return $this;
    }
}