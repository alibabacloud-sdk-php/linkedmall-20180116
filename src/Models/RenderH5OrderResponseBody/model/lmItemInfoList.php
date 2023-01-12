<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class lmItemInfoList extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $actualPrice;

    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $cash;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @example 65******461
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemPicUrl;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @example 10000102-******94679
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 69
     *
     * @var int
     */
    public $points;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 42******044
     *
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @example 46******9302
     *
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $virtualItemType;
    protected $_name = [
        'actualPrice'     => 'ActualPrice',
        'canSell'         => 'CanSell',
        'cash'            => 'Cash',
        'features'        => 'Features',
        'itemId'          => 'ItemId',
        'itemName'        => 'ItemName',
        'itemPicUrl'      => 'ItemPicUrl',
        'itemUrl'         => 'ItemUrl',
        'lmItemId'        => 'LmItemId',
        'message'         => 'Message',
        'points'          => 'Points',
        'quantity'        => 'Quantity',
        'sellerId'        => 'SellerId',
        'sellerNick'      => 'SellerNick',
        'skuId'           => 'SkuId',
        'skuName'         => 'SkuName',
        'tbShopName'      => 'TbShopName',
        'virtualItemType' => 'VirtualItemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualPrice) {
            $res['ActualPrice'] = $this->actualPrice;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->cash) {
            $res['Cash'] = $this->cash;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->virtualItemType) {
            $res['VirtualItemType'] = $this->virtualItemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualPrice'])) {
            $model->actualPrice = $map['ActualPrice'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['Cash'])) {
            $model->cash = $map['Cash'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['VirtualItemType'])) {
            $model->virtualItemType = $map['VirtualItemType'];
        }

        return $model;
    }
}
