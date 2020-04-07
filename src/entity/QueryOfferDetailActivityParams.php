<?php


namespace JavaReact\AlibabaOpen\entity;


class QueryOfferDetailActivityParams extends BaseEntityParams
{
    public $offerId;

    /**
     * @param mixed $offerId
     * @return QueryOfferDetailActivityParams
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;
        return $this;
    }

}