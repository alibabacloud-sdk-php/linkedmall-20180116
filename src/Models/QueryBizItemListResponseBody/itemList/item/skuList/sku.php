<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku\gradePriceModels;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku\userLabelList;
use AlibabaCloud\Tea\Model;

class sku extends Model
{
    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var int
     */
    public $points;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var userLabelList
     */
    public $userLabelList;

    /**
     * @var string
     */
    public $benefitId;

    /**
     * @var gradePriceModels
     */
    public $gradePriceModels;

    /**
     * @var mixed[]
     */
    public $customizedAttributeMap;
    protected $_name = [
        'priceCent'              => 'PriceCent',
        'skuId'                  => 'SkuId',
        'canSell'                => 'CanSell',
        'skuPicUrl'              => 'SkuPicUrl',
        'points'                 => 'Points',
        'skuTitle'               => 'SkuTitle',
        'pointsAmount'           => 'PointsAmount',
        'userLabelList'          => 'UserLabelList',
        'benefitId'              => 'BenefitId',
        'gradePriceModels'       => 'GradePriceModels',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->userLabelList) {
            $res['UserLabelList'] = null !== $this->userLabelList ? $this->userLabelList->toMap() : null;
        }
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->gradePriceModels) {
            $res['GradePriceModels'] = null !== $this->gradePriceModels ? $this->gradePriceModels->toMap() : null;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['UserLabelList'])) {
            $model->userLabelList = userLabelList::fromMap($map['UserLabelList']);
        }
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['GradePriceModels'])) {
            $model->gradePriceModels = gradePriceModels::fromMap($map['GradePriceModels']);
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }

        return $model;
    }
}
