<?php

namespace JavaReact\AlibabaOpen;

use JavaReact\AlibabaOpen\core\ContainerBase;
use JavaReact\AlibabaOpen\provider\StoreProvider;

/**
 * Class Application
 * @property \JavaReact\AlibabaOpen\functions\order\Order order
 */
class AlibabaClient extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        StoreProvider::class,
        //...其他服务提供者
    ];
}
