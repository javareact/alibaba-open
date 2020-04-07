<?php

namespace JavaReact\AlibabaOpen\entity;

class Preview4CybMediaParams extends BaseEntityParams
{
    public $addressParam;
    public $cargoParamList;

    /**
     * @param mixed $addressParam
     * @return Preview4CybMediaParams
     */
    public function setAddressParam($addressParam)
    {
        $this->addressParam = $addressParam;
        return $this;
    }

    /**
     * @param mixed $cargoParamList
     * @return Preview4CybMediaParams
     */
    public function setCargoParamList($cargoParamList)
    {
        $this->cargoParamList = $cargoParamList;
        return $this;
    }

}