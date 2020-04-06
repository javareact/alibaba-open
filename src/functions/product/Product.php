<?php

namespace JavaReact\AlibabaOpen\functions\product;

use JavaReact\AlibabaOpen\core\BaseClient;

/**
 * 产品模块
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
     * 解除关注商品
     * @return $this
     */
    public function productUnfollow()
    {
        $this->url_info = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
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

    /**
     * 获取营销活动价格等活动信息
     * @return $this
     */
    public function queryOfferDetailActivity()
    {
        $this->url_info = 'com.alibaba.p4p:alibaba.cps.queryOfferDetailActivity-1';
        return $this;
    }

    /**
     * 商品列表搜索接口
     * @return $this
     */
    public function listOverPricedOffer()
    {
        $this->url_info = 'com.alibaba.p4p:alibaba.cps.op.searchCybOffers-1';
        return $this;
    }

    /**
     * 读取已选商品列表
     * @return $this
     */
    public function listCybUserGroupFeed()
    {
        $this->url_info = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroupFeed-1';
        return $this;
    }
}