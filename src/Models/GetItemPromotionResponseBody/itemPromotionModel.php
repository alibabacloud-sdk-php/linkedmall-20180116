<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetItemPromotionResponseBody;

use AlibabaCloud\Tea\Model;

class itemPromotionModel extends Model
{
    /**
     * @example 2022-02-06 10:01:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example {"key":"value"}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 66440412****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000035-63064613****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example ""
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @example true
     *
     * @var bool
     */
    public $promotionFlag;

    /**
     * @example 68476201884251****
     *
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $promotionName;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $skuPromotion;

    /**
     * @example 2022-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'extInfo'       => 'ExtInfo',
        'itemId'        => 'ItemId',
        'lmItemId'      => 'LmItemId',
        'promotionDesc' => 'PromotionDesc',
        'promotionFlag' => 'PromotionFlag',
        'promotionId'   => 'PromotionId',
        'promotionName' => 'PromotionName',
        'skuPromotion'  => 'SkuPromotion',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionFlag) {
            $res['PromotionFlag'] = $this->promotionFlag;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->skuPromotion) {
            $res['SkuPromotion'] = $this->skuPromotion;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemPromotionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionFlag'])) {
            $model->promotionFlag = $map['PromotionFlag'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['SkuPromotion'])) {
            $model->skuPromotion = $map['SkuPromotion'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
