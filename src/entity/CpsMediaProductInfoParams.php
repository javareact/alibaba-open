<?php


namespace JavaReact\AlibabaOpen\entity;


class CpsMediaProductInfoParams extends BaseEntityParams
{
    public $offerId;
    public $needCpsSuggestPrice;
    public $needIntelligentInfo;

    /**
     * @param mixed $offerId
     * @return CpsMediaProductInfoParams
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;
        return $this;
    }

    /**
     * @param mixed $needCpsSuggestPrice
     * @return CpsMediaProductInfoParams
     */
    public function setNeedCpsSuggestPrice($needCpsSuggestPrice)
    {
        $this->needCpsSuggestPrice = $needCpsSuggestPrice;
        return $this;
    }

    /**
     * @param mixed $needIntelligentInfo
     * @return CpsMediaProductInfoParams
     */
    public function setNeedIntelligentInfo($needIntelligentInfo)
    {
        $this->needIntelligentInfo = $needIntelligentInfo;
        return $this;
    }

}