<?php

namespace JavaReact\AlibabaOpen\entity;

class Preview4CybMediaParams extends BaseEntityParams
{
    public $addressParam;
    public $cargoParamList;

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
}