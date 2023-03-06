<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class InitApplyRefundWithDesignatedTbUidRequest extends Model
{
    /**
     * @example LMALL2022***001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 14244***33071
     *
     * @var int
     */
    public $disputeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $refundCode;

    /**
     * @example 711***981
     *
     * @var string
     */
    public $subLmOrderId;

    /**
     * @example ANONY
     *
     * @var string
     */
    public $tbAccountType;

    /**
     * @example 334***641
     *
     * @var int
     */
    public $tbUserId;

    /**
     * @example u***001
     *
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'bizId'            => 'BizId',
        'disputeId'        => 'DisputeId',
        'refundCode'       => 'RefundCode',
        'subLmOrderId'     => 'SubLmOrderId',
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
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->refundCode) {
            $res['RefundCode'] = $this->refundCode;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
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
     * @return InitApplyRefundWithDesignatedTbUidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['RefundCode'])) {
            $model->refundCode = $map['RefundCode'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
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
