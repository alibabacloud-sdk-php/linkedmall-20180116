<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ListUserPointRecordsRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1638958044395
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ""
     *
     * @var string
     */
    public $pointAction;

    /**
     * @var string
     */
    public $pointActions;

    /**
     * @example ""
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 1640958044395
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 22******67
     *
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'accountType'      => 'AccountType',
        'bizId'            => 'BizId',
        'endTime'          => 'EndTime',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'pointAction'      => 'PointAction',
        'pointActions'     => 'PointActions',
        'recordId'         => 'RecordId',
        'ruleId'           => 'RuleId',
        'startTime'        => 'StartTime',
        'thirdPartyUserId' => 'ThirdPartyUserId',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pointAction) {
            $res['PointAction'] = $this->pointAction;
        }
        if (null !== $this->pointActions) {
            $res['PointActions'] = $this->pointActions;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserPointRecordsRequest
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PointAction'])) {
            $model->pointAction = $map['PointAction'];
        }
        if (isset($map['PointActions'])) {
            $model->pointActions = $map['PointActions'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}
