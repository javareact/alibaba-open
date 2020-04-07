<?php

namespace JavaReact\AlibabaOpen\entity;

abstract class BaseEntityParams
{
    /**
     * PUBLIC属性转数组
     * @return array
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_class_vars(static::class));
    }

}