<?php


namespace JavaReact\AlibabaOpen\entity;


class ListOverPricedOfferParams extends BaseEntityParams
{
    private $biztype;
    private $buyerProtection;
    private $city;
    private $deliveryTimeType;
    private $descendOrder;
    private $holidayTagId;
    private $keyWords;
    private $page;
    private $pageSize;
    private $postCategoryId;
    private $priceStart;
    private $priceEnd;
    private $priceFilterFields;
    private $province;
    private $sortType;
    private $tags;
    private $offerTags;
    private $offerIds;

    /**
     * ListOverPricedOfferParams constructor.
     * @param $page
     * @param $pageSize
     */
    public function __construct($page, $pageSize)
    {
        $this->page     = $page;
        $this->pageSize = $pageSize;
    }


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