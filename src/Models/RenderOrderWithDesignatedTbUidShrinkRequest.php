<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RenderOrderWithDesignatedTbUidShrinkRequest extends Model
{
    /**
     * @example LMALL202***001
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $itemListShrink;

    /**
     * @example ANONY
     *
     * @var string
     */
    public $tbAccountType;

    /**
     * @example 123***23
     *
     * @var int
     */
    public $tbUserId;

    /**
     * @example U123***23
     *
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'bizId'            => 'BizId',
        'deliveryAddress'  => 'DeliveryAddress',
        'itemListShrink'   => 'ItemList',
        'tbAccountType'    => 'TbAccountType',
        'tbUserId'         => 'TbUserId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->itemListShrink) {
            $res['ItemList'] = $this->itemListShrink;
        }
        if (null !== $this->tbAccountType) {
            $res['TbAccountType'] = $this->tbAccountType;
        }
        if (null !== $this->tbUserId) {
            $res['TbUserId'] = $this->tbUserId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenderOrderWithDesignatedTbUidShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['ItemList'])) {
            $model->itemListShrink = $map['ItemList'];
        }
        if (isset($map['TbAccountType'])) {
            $model->tbAccountType = $map['TbAccountType'];
        }
        if (isset($map['TbUserId'])) {
            $model->tbUserId = $map['TbUserId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}
