<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddSupplierNewItemsRequest;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example 61936646****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000035-61936646****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var int[]
     */
    public $skuList;
    protected $_name = [
        'itemId'   => 'ItemId',
        'lmItemId' => 'LmItemId',
        'skuList'  => 'SkuList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = $this->skuList;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SkuList'])) {
            if (!empty($map['SkuList'])) {
                $model->skuList = $map['SkuList'];
            }
        }

        return $model;
    }
}
