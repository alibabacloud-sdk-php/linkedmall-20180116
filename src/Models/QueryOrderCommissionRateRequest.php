<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderCommissionRateRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example LMALL20******002
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 221249435****
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example 45******23
     *
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $thirdPartyUserId;

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
        'lmOrderId'             => 'LmOrderId',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
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
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderCommissionRateRequest
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
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }

        return $model;
    }
}
