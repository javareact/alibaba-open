<?php

namespace JavaReact\AlibabaOpen\entity;

use JavaReact\AlibabaOpen\interfaces\Params;

abstract class BaseEntityParams implements Params
{
    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_class_vars(static::class));
    }

}