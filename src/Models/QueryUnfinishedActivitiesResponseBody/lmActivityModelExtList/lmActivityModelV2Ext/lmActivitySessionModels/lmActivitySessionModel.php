<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody\lmActivityModelExtList\lmActivityModelV2Ext\lmActivitySessionModels;

use AlibabaCloud\Tea\Model;

class lmActivitySessionModel extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-03-08 18:59:59
     *
     * @var string
     */
    public $displayDate;

    /**
     * @example 2022-03-09 18:59:59
     *
     * @var string
     */
    public $endDate;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 679
     *
     * @var int
     */
    public $lmActivityId;

    /**
     * @var int
     */
    public $lmSessionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2022-03-08 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 3a92eb6******54005be358a43bd
     *
     * @var string
     */
    public $subBizCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'description'  => 'Description',
        'displayDate'  => 'DisplayDate',
        'endDate'      => 'EndDate',
        'extInfo'      => 'ExtInfo',
        'lmActivityId' => 'LmActivityId',
        'lmSessionId'  => 'LmSessionId',
        'name'         => 'Name',
        'startDate'    => 'StartDate',
        'subBizCode'   => 'SubBizCode',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivitySessionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }

        return $model;
    }
}
