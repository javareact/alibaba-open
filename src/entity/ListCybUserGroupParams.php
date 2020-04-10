<?php

namespace JavaReact\AlibabaOpen\entity;

class ListCybUserGroupParams extends BaseEntityParams
{
    private $pageNo = 1;

    private $pageSize = 50;

    /**
     * ListCybUserGroupParams constructor.
     * @param int $pageNo
     * @param int $pageSize
     */
    public function __construct(int $pageNo, int $pageSize)
    {
        $this->pageNo   = $pageNo;
        $this->pageSize = $pageSize;
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