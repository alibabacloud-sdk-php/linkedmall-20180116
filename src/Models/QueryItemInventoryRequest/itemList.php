<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryRequest;

use AlibabaCloud\Tea\Model;

class itemList extends Model
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
     * @var int[]
     */
    public $skuIdList;
    protected $_name = [
        'lmItemId'  => 'LmItemId',
        'itemId'    => 'ItemId',
        'skuIdList' => 'SkuIdList',
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
        if (null !== $this->skuIdList) {
            $res['SkuIdList'] = $this->skuIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
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
        if (isset($map['SkuIdList'])) {
            if (!empty($map['SkuIdList'])) {
                $model->skuIdList = $map['SkuIdList'];
            }
        }

        return $model;
    }
}
