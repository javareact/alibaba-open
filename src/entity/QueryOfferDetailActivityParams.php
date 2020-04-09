<?php

namespace JavaReact\AlibabaOpen\entity;

class QueryOfferDetailActivityParams extends BaseEntityParams
{
    private $offerId;

    /**
     * QueryOfferDetailActivityParams constructor.
     * @param $offerId
     */
    public function __construct($offerId)
    {
        $this->offerId = $offerId;
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