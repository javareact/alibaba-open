<?php


namespace JavaReact\AlibabaOpen\entity;


class ListCybUserGroupFeedParams extends BaseEntityParams
{
    public $groupId;
    public $pageNo;
    public $pageSize;
    public $feedId;
    public $title;

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
     * @param mixed $pageNo
     * @return ListCybUserGroupFeedParams
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @param mixed $pageSize
     * @return ListCybUserGroupFeedParams
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
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

}