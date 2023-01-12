<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeductUserPointResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 11******18
     *
     * @var string
     */
    public $accountId;

    /**
     * @example ""
     *
     * @var string
     */
    public $action;

    /**
     * @example 10
     *
     * @var int
     */
    public $amount;

    /**
     * @example LMALL20******003
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 22******637
     *
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @example {"key":"value"}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 20211212******31746-1202
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example ""
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 2000
     *
     * @var int
     */
    public $rest;

    /**
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example ""
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'    => 'AccountId',
        'action'       => 'Action',
        'amount'       => 'Amount',
        'bizId'        => 'BizId',
        'bizUid'       => 'BizUid',
        'description'  => 'Description',
        'extInfo'      => 'ExtInfo',
        'idempotentId' => 'IdempotentId',
        'name'         => 'Name',
        'recordId'     => 'RecordId',
        'rest'         => 'Rest',
        'ruleId'       => 'RuleId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->rest) {
            $res['Rest'] = $this->rest;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Rest'])) {
            $model->rest = $map['Rest'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
