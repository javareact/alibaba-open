<?php

namespace JavaReact\AlibabaOpen\entity;

class Preview4CybMediaParams extends BaseEntityParams
{
    private $addressParam;
    private $cargoParamList;

    /**
     * Preview4CybMediaParams constructor.
     * @param $addressParam
     * @param $cargoParamList
     */
    public function __construct($addressParam, $cargoParamList)
    {
        $this->addressParam   = $addressParam;
        $this->cargoParamList = $cargoParamList;
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