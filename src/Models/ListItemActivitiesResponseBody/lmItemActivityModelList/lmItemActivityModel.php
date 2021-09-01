<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList\lmItemActivityModel\lmActivityPopModel;
use AlibabaCloud\Tea\Model;

class lmItemActivityModel extends Model
{
    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var lmActivityPopModel
     */
    public $lmActivityPopModel;
    protected $_name = [
        'lmItemId'           => 'LmItemId',
        'itemId'             => 'ItemId',
        'lmActivityPopModel' => 'LmActivityPopModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmActivityPopModel) {
            $res['LmActivityPopModel'] = null !== $this->lmActivityPopModel ? $this->lmActivityPopModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivityModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmActivityPopModel'])) {
            $model->lmActivityPopModel = lmActivityPopModel::fromMap($map['LmActivityPopModel']);
        }

        return $model;
    }
}
