<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RefundUserPointShrinkRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 100
     *
     * @var int
     */
    public $amount;

    /**
     * @example LMALL2000***12
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfoShrink;

    /**
     * @example 123
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @example PYPT**12
     *
     * @var string
     */
    public $originRecordId;

    /**
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 1
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'accountType'      => 'AccountType',
        'amount'           => 'Amount',
        'bizId'            => 'BizId',
        'extInfoShrink'    => 'ExtInfo',
        'idempotentId'     => 'IdempotentId',
        'message'          => 'Message',
        'originRecordId'   => 'OriginRecordId',
        'ruleId'           => 'RuleId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'title'            => 'Title',
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
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extInfoShrink) {
            $res['ExtInfo'] = $this->extInfoShrink;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->originRecordId) {
            $res['OriginRecordId'] = $this->originRecordId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundUserPointShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfoShrink = $map['ExtInfo'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OriginRecordId'])) {
            $model->originRecordId = $map['OriginRecordId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
