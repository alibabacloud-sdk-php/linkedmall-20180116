<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateMovieTicketOrderRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 22******85759
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example ""
     *
     * @var string
     */
    public $lockSeatAppKey;

    /**
     * @example 146******54
     *
     * @var string
     */
    public $outTradeId;
    protected $_name = [
        'bizId'          => 'BizId',
        'bizUid'         => 'BizUid',
        'extJson'        => 'ExtJson',
        'lockSeatAppKey' => 'LockSeatAppKey',
        'outTradeId'     => 'OutTradeId',
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
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->lockSeatAppKey) {
            $res['LockSeatAppKey'] = $this->lockSeatAppKey;
        }
        if (null !== $this->outTradeId) {
            $res['OutTradeId'] = $this->outTradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMovieTicketOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['LockSeatAppKey'])) {
            $model->lockSeatAppKey = $map['LockSeatAppKey'];
        }
        if (isset($map['OutTradeId'])) {
            $model->outTradeId = $map['OutTradeId'];
        }

        return $model;
    }
}
