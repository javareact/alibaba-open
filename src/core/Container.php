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
    private $instances =array();
    private $values = array();
    public $register;

    public function serviceRegister($provider)
    {
        $provider->serviceProvider($this);

        return $this;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        if(isset($this->instances[$offset])){
            return $this->instances[$offset];
        }
        $raw = $this->values[$offset];
        $val = $this->values[$offset] = $raw($this);
        $this->instances[$offset] = $val;
        return $val;
    }


    public function offsetSet($offset, $value)
    {
        $this->values[$offset] = $value;
    }

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
    public function pushMiddlewares(array $class_and_function,$name =''){
        if(empty($this->middlewares)){
            $this->middlewares[$name] = $class_and_function;
        }else{
            array_push($this->middlewares,[$name=>$class_and_function]);
        }
        return $this->middlewares;
    }


}
