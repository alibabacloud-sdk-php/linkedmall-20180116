<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder\itemPriceList;
use AlibabaCloud\Tea\Model;

class subItemOrder extends Model
{
    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemPic;

    /**
     * @var string
     */
    public $itemPriceInfo;

    /**
     * @var itemPriceList
     */
    public $itemPriceList;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var int
     */
    public $tbSubOrderId;

    /**
     * @var string
     */
    public $totalPaymentInfo;
    protected $_name = [
        'channelCode'      => 'ChannelCode',
        'itemId'           => 'ItemId',
        'itemPic'          => 'ItemPic',
        'itemPriceInfo'    => 'ItemPriceInfo',
        'itemPriceList'    => 'ItemPriceList',
        'itemTitle'        => 'ItemTitle',
        'lmItemId'         => 'LmItemId',
        'lmOrderId'        => 'LmOrderId',
        'number'           => 'Number',
        'payStatus'        => 'PayStatus',
        'skuId'            => 'SkuId',
        'skuName'          => 'SkuName',
        'tbSubOrderId'     => 'TbSubOrderId',
        'totalPaymentInfo' => 'TotalPaymentInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemPic) {
            $res['ItemPic'] = $this->itemPic;
        }
        if (null !== $this->itemPriceInfo) {
            $res['ItemPriceInfo'] = $this->itemPriceInfo;
        }
        if (null !== $this->itemPriceList) {
            $res['ItemPriceList'] = null !== $this->itemPriceList ? $this->itemPriceList->toMap() : null;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->tbSubOrderId) {
            $res['TbSubOrderId'] = $this->tbSubOrderId;
        }
        if (null !== $this->totalPaymentInfo) {
            $res['TotalPaymentInfo'] = $this->totalPaymentInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subItemOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemPic'])) {
            $model->itemPic = $map['ItemPic'];
        }
        if (isset($map['ItemPriceInfo'])) {
            $model->itemPriceInfo = $map['ItemPriceInfo'];
        }
        if (isset($map['ItemPriceList'])) {
            $model->itemPriceList = itemPriceList::fromMap($map['ItemPriceList']);
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['TbSubOrderId'])) {
            $model->tbSubOrderId = $map['TbSubOrderId'];
        }
        if (isset($map['TotalPaymentInfo'])) {
            $model->totalPaymentInfo = $map['TotalPaymentInfo'];
        }

        return $model;
    }
}
