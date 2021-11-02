<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryItemDetailInnerRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var bool
     */
    public $useAnonymousTbAccount;
    protected $_name = [
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'divisionCode'          => 'DivisionCode',
        'ip'                    => 'Ip',
        'itemId'                => 'ItemId',
        'lmItemId'              => 'LmItemId',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
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
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
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
     * @return QueryItemDetailInnerRequest
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
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
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
