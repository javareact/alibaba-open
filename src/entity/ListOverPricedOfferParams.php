<?php


namespace JavaReact\AlibabaOpen\entity;


class ListOverPricedOfferParams extends BaseEntityParams
{
    public $biztype;
    public $buyerProtection;
    public $city;
    public $deliveryTimeType;
    public $descendOrder;
    public $holidayTagId;
    public $keyWords;
    public $page;
    public $pageSize;
    public $postCategoryId;
    public $priceStart;
    public $priceEnd;
    public $priceFilterFields;
    public $province;
    public $sortType;
    public $tags;
    public $offerTags;
    public $offerIds;

    /**
     * @param mixed $biztype
     * @return ListOverPricedOfferParams
     */
    public function setBiztype($biztype)
    {
        $this->biztype = $biztype;
        return $this;
    }

    /**
     * @param mixed $buyerProtection
     * @return ListOverPricedOfferParams
     */
    public function setBuyerProtection($buyerProtection)
    {
        $this->buyerProtection = $buyerProtection;
        return $this;
    }

    /**
     * @param mixed $city
     * @return ListOverPricedOfferParams
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param mixed $deliveryTimeType
     * @return ListOverPricedOfferParams
     */
    public function setDeliveryTimeType($deliveryTimeType)
    {
        $this->deliveryTimeType = $deliveryTimeType;
        return $this;
    }

    /**
     * @param mixed $descendOrder
     * @return ListOverPricedOfferParams
     */
    public function setDescendOrder($descendOrder)
    {
        $this->descendOrder = $descendOrder;
        return $this;
    }

    /**
     * @param mixed $holidayTagId
     * @return ListOverPricedOfferParams
     */
    public function setHolidayTagId($holidayTagId)
    {
        $this->holidayTagId = $holidayTagId;
        return $this;
    }

    /**
     * @param mixed $keyWords
     * @return ListOverPricedOfferParams
     */
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;
        return $this;
    }

    /**
     * @param mixed $page
     * @return ListOverPricedOfferParams
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param mixed $pageSize
     * @return ListOverPricedOfferParams
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param mixed $postCategoryId
     * @return ListOverPricedOfferParams
     */
    public function setPostCategoryId($postCategoryId)
    {
        $this->postCategoryId = $postCategoryId;
        return $this;
    }

    /**
     * @param mixed $priceStart
     * @return ListOverPricedOfferParams
     */
    public function setPriceStart($priceStart)
    {
        $this->priceStart = $priceStart;
        return $this;
    }

    /**
     * @param mixed $priceEnd
     * @return ListOverPricedOfferParams
     */
    public function setPriceEnd($priceEnd)
    {
        $this->priceEnd = $priceEnd;
        return $this;
    }

    /**
     * @param mixed $priceFilterFields
     * @return ListOverPricedOfferParams
     */
    public function setPriceFilterFields($priceFilterFields)
    {
        $this->priceFilterFields = $priceFilterFields;
        return $this;
    }

    /**
     * @param mixed $province
     * @return ListOverPricedOfferParams
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param mixed $sortType
     * @return ListOverPricedOfferParams
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
        return $this;
    }

    /**
     * @param mixed $tags
     * @return ListOverPricedOfferParams
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param mixed $offerTags
     * @return ListOverPricedOfferParams
     */
    public function setOfferTags($offerTags)
    {
        $this->offerTags = $offerTags;
        return $this;
    }

    /**
     * @param mixed $offerIds
     * @return ListOverPricedOfferParams
     */
    public function setOfferIds($offerIds)
    {
        $this->offerIds = $offerIds;
        return $this;
    }

}