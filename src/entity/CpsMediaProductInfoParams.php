<?php


namespace JavaReact\AlibabaOpen\entity;


class CpsMediaProductInfoParams extends BaseEntityParams
{
    private $offerId;
    private $needCpsSuggestPrice = true;//是否需要CPS建议价
    private $needIntelligentInfo;//是否返回算法改写的信息，包括标题、图片和详情图片

    /**
     * CpsMediaProductInfoParams constructor.
     * @param $offerId
     */
    public function __construct($offerId)
    {
        $this->offerId = $offerId;
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