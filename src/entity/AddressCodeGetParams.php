<?php


namespace JavaReact\AlibabaOpen\entity;


class AddressCodeGetParams extends BaseEntityParams
{

    private $areaCode;
    private $webSite = '1688';

    /**
     * AddressCodeGetParams constructor.
     * @param $areaCode
     */
    public function __construct($areaCode)
    {
        $this->areaCode = $areaCode;
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