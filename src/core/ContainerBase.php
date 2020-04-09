<?php

namespace JavaReact\AlibabaOpen\core;

/**
 * Class ContainerBase
 * @package JavaReact\AlibabaOpen\core
 */
class ContainerBase extends Container
{
    /**
     * @var array
     */
    protected $provider = [];

    /**
     * @var array
     */
    public $params = array();

    /**
     * @var
     */
    public $base_url;

    /**
     * @var string
     */
    public $appkey = '';

    /**
     * @var string
     */
    public $appsecret = '';

    /**
     * @var string
     */
    public $access_token = '';

    /**
     * ContainerBase constructor.
     * @param array $params
     */
    public function __construct($params = array())
    {
        if ($params) {
            foreach ($params as &$item) {
                if (is_array($item) || is_object($item)) {
                    $item = json_encode($item, JSON_UNESCAPED_UNICODE);
                }
            }
        }
        $this->params      = $params;
        $provider_callback = function ($provider) {
            $obj = new $provider;
            $this->serviceRegister($obj);
        };
        array_walk($this->provider, $provider_callback);//注册
    }

    /**
     * @param $id
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * @param mixed $appsecret
     * @return ContainerBase
     */
    public function setAppsecret($appsecret)
    {
        $this->appsecret = $appsecret;
        return $this;
    }

    /**
     * @param mixed $appkey
     * @return ContainerBase
     */
    public function setAppkey($appkey)
    {
        $this->appkey = $appkey;
        return $this;
    }

    /**
     * @param string $access_token
     * @return ContainerBase
     */
    public function setAccessToken(string $access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }


}
