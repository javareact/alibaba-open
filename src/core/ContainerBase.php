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

    /**
     * @param string $access_token
     */
    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }


}
