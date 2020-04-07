<?php


namespace JavaReact\AlibabaOpen\entity;


class ListCybUserGroupFeedParams extends BaseEntityParams
{
    private $groupId;
    private $pageNo;
    private $pageSize;
    private $feedId;
    private $title;

    /**
     * ListCybUserGroupFeedParams constructor.
     * @param $pageNo
     * @param $pageSize
     */
    public function __construct($pageNo, $pageSize)
    {
        $this->pageNo   = $pageNo;
        $this->pageSize = $pageSize;
    }


    /**
     * @param mixed $groupId
     * @return ListCybUserGroupFeedParams
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @param mixed $feedId
     * @return ListCybUserGroupFeedParams
     */
    public function setFeedId($feedId)
    {
        $this->feedId = $feedId;
        return $this;
    }

    /**
     * @param mixed $title
     * @return ListCybUserGroupFeedParams
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL和空
        return array_filter(get_object_vars($this));
    }

}