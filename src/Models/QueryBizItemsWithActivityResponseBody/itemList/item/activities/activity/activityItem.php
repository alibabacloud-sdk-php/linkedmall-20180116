<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem\activityItemSkuList;
use AlibabaCloud\Tea\Model;

class activityItem extends Model
{
    /**
     * @var int
     */
    public $limitQuantityForPerson;

    /**
     * @var int
     */
    public $activityQuantity;

    /**
     * @var activityItemSkuList
     */
    public $activityItemSkuList;
    protected $_name = [
        'limitQuantityForPerson' => 'LimitQuantityForPerson',
        'activityQuantity'       => 'ActivityQuantity',
        'activityItemSkuList'    => 'ActivityItemSkuList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitQuantityForPerson) {
            $res['LimitQuantityForPerson'] = $this->limitQuantityForPerson;
        }
        if (null !== $this->activityQuantity) {
            $res['ActivityQuantity'] = $this->activityQuantity;
        }
        if (null !== $this->activityItemSkuList) {
            $res['ActivityItemSkuList'] = null !== $this->activityItemSkuList ? $this->activityItemSkuList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LimitQuantityForPerson'])) {
            $model->limitQuantityForPerson = $map['LimitQuantityForPerson'];
        }
        if (isset($map['ActivityQuantity'])) {
            $model->activityQuantity = $map['ActivityQuantity'];
        }
        if (isset($map['ActivityItemSkuList'])) {
            $model->activityItemSkuList = activityItemSkuList::fromMap($map['ActivityItemSkuList']);
        }

        return $model;
    }
}
