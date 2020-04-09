<?php


namespace JavaReact\AlibabaOpen\entity;


class GetCategoryByIdParams extends BaseEntityParams
{

    private $categoryID;

    /**
     * GetCategoryParams constructor.
     * @param $categoryID
     */
    public function __construct($categoryID)
    {
        $this->categoryID = $categoryID;
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