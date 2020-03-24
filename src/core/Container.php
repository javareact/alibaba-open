<?php

namespace JavaReact\AlibabaOpen\core;


/**
 * Class Container
 * @package JavaReact\AlibabaOpen\core
 */
class Container implements \ArrayAccess
{
    /**
     * 中间件
     * @var array
     */
    protected $middlewares = array();
    /**
     * @var array
     */
    private $instances = array();
    /**
     * @var array
     */
    private $values = array();
    /**
     * @var
     */
    public $register;

    /**
     * @param $provider
     * @return $this
     */
    public function serviceRegister($provider)
    {
        $provider->serviceProvider($this);
        return $this;
    }

    /**
     * @param mixed $offset
     * @return bool|void
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (isset($this->instances[$offset])) {
            return $this->instances[$offset];
        }
        $raw                      = $this->values[$offset];
        $val                      = $this->values[$offset] = $raw($this);
        $this->instances[$offset] = $val;
        return $val;
    }


    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->values[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {

    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * @param array $middlewares
     */
    public function setMiddlewares(array $middlewares)
    {
        $this->middlewares = $middlewares;
    }

    /**
     * 添加中间件
     * @param $function
     * @param string $name
     * @return array
     */
    public function pushMiddlewares(array $class_and_function, $name = '')
    {
        if (empty($this->middlewares)) {
            $this->middlewares[$name] = $class_and_function;
        } else {
            array_push($this->middlewares, [$name => $class_and_function]);
        }
        return $this->middlewares;
    }


}
