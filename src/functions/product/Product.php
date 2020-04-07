<?php

namespace JavaReact\AlibabaOpen\functions\product;

use JavaReact\AlibabaOpen\core\BaseClient;
use JavaReact\AlibabaOpen\entity\CpsMediaProductInfoParams;
use JavaReact\AlibabaOpen\entity\ListCybUserGroupFeedParams;
use JavaReact\AlibabaOpen\entity\ListOverPricedOfferParams;
use JavaReact\AlibabaOpen\entity\ProductFollowParams;
use JavaReact\AlibabaOpen\entity\ProductUnfollowParams;
use JavaReact\AlibabaOpen\entity\QueryOfferDetailActivityParams;

/**
 * 产品模块
 * @package JavaReact\AlibabaOpen\functions\product
 */
class Product extends BaseClient
{
    /**
     * 关注商品
     * @param ProductFollowParams $productFollowParams
     * @return $this
     */
    public function productFollow(ProductFollowParams $productFollowParams)
    {
        $this->app->params = $productFollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.follow-1';
        return $this;
    }

    /**
     * 解除关注商品
     * @param ProductUnfollowParams $productUnfollowParams
     * @return $this
     */
    public function productUnfollow(ProductUnfollowParams $productUnfollowParams)
    {
        $this->app->params = $productUnfollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
        return $this;
    }

    /**
     * 获取商品详情
     * @param CpsMediaProductInfoParams $cpsMediaProductInfoParams
     * @return $this
     */
    public function cpsMediaProductInfo(CpsMediaProductInfoParams $cpsMediaProductInfoParams)
    {
        $this->app->params = $cpsMediaProductInfoParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.cpsMedia.productInfo-1';
        return $this;
    }

    /**
     * 获取营销活动价格等活动信息
     * @param QueryOfferDetailActivityParams $queryOfferDetailActivityParams
     * @return $this
     */
    public function queryOfferDetailActivity(QueryOfferDetailActivityParams $queryOfferDetailActivityParams)
    {
        $this->app->params = $queryOfferDetailActivityParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.queryOfferDetailActivity-1';
        return $this;
    }

    /**
     * 商品列表搜索接口
     * @param ListOverPricedOfferParams $listOverPricedOfferParams
     * @return $this
     */
    public function listOverPricedOffer(ListOverPricedOfferParams $listOverPricedOfferParams)
    {
        $this->app->params = $listOverPricedOfferParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.searchCybOffers-1';
        return $this;
    }

    /**
     * 读取已选商品列表
     * @param ListCybUserGroupFeedParams $listCybUserGroupFeedParams
     * @return $this
     */
    public function listCybUserGroupFeed(ListCybUserGroupFeedParams $listCybUserGroupFeedParams)
    {
        $this->app->params = $listCybUserGroupFeedParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroupFeed-1';
        return $this;
    }
}