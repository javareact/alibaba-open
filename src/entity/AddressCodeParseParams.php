<?php


namespace JavaReact\AlibabaOpen\entity;


class AddressCodeParseParams extends BaseEntityParams
{

    private $addressInfo;

    /**
     * AddressCodeParseParams constructor.
     * @param $addressInfo
     */
    public function __construct($addressInfo)
    {
        $this->addressInfo = $addressInfo;
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