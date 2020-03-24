<?php


namespace JavaReact\AlibabaOpen\core;


class ContainerBase extends Container
{
    protected $provider = [];

    public $params = array();

    public $base_url;

    public $appkey='';

    public $appsecret='';

    public $access_token = '06410386-242c-41f6-8a20-5e7e0d2b6229';

    public function __construct($params =array())
    {
        $this->params = $params;

        $provider_callback = function ($provider) {
            $obj =new $provider;
            $this->serviceRegister($obj);
        };
        array_walk($this->provider, $provider_callback);//注册
    }

    public function __get($id)
    {

        return $this->offsetGet($id);

    }

    /**
     * @param mixed $appsecret
     */
    public function setAppsecret($appsecret): void
    {
        $this->appsecret = $appsecret;
    }

    /**
     * @param mixed $appkey
     */
    public function setAppkey($appkey): void
    {
        $this->appkey = $appkey;
    }
}
