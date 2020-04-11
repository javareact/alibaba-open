<?php


namespace JavaReact\AlibabaOpen\entity;


class AddressCodeChildParams extends BaseEntityParams
{

    private $areaCode;
    private $webSite = '1688';

    /**
     * @param mixed $areaCode
     * @return AddressCodeChildParams
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
        return $this;
    }

    /**
     * @param string $webSite
     * @return AddressCodeChildParams
     */
    public function setWebSite(string $webSite): AddressCodeChildParams
    {
        $this->webSite = $webSite;
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