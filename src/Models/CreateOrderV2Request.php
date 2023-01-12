<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2Request\itemList;
use AlibabaCloud\Tea\Model;

class CreateOrderV2Request extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example LMALL202****0001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 4012776630
     *
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $buyerMessageMap;

    /**
     * @example *****************************************************************************************************
     *
     * @var string
     */
    public $deliveryAddress;

    /**
     * @example {\"outShopId\":\"8044468\"}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 591831917868
     *
     * @var int
     */
    public $itemId;

    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @example 10016572-654408058233
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $orderExpireTime;

    /**
     * @example 949251510338846720
     *
     * @var string
     */
    public $outTradeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 1
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @example true
     *
     * @var bool
     */
    public $useAnonymousTbAccount;
    protected $_name = [
        'accountType'           => 'AccountType',
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'buyerMessageMap'       => 'BuyerMessageMap',
        'deliveryAddress'       => 'DeliveryAddress',
        'extJson'               => 'ExtJson',
        'itemId'                => 'ItemId',
        'itemList'              => 'ItemList',
        'lmItemId'              => 'LmItemId',
        'orderExpireTime'       => 'OrderExpireTime',
        'outTradeId'            => 'OutTradeId',
        'quantity'              => 'Quantity',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'totalAmount'           => 'TotalAmount',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->buyerMessageMap) {
            $res['BuyerMessageMap'] = $this->buyerMessageMap;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->orderExpireTime) {
            $res['OrderExpireTime'] = $this->orderExpireTime;
        }
        if (null !== $this->outTradeId) {
            $res['OutTradeId'] = $this->outTradeId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['BuyerMessageMap'])) {
            $model->buyerMessageMap = $map['BuyerMessageMap'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['OrderExpireTime'])) {
            $model->orderExpireTime = $map['OrderExpireTime'];
        }
        if (isset($map['OutTradeId'])) {
            $model->outTradeId = $map['OutTradeId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }

        return $model;
    }
}
