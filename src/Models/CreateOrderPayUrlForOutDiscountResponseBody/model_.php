<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderPayUrlForOutDiscountResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mixed[][]
     */
    public $allIdsMap;

    /**
     * @var string[]
     */
    public $lmOrderList;

    /**
     * @var string[]
     */
    public $orderIds;

    /**
     * @var string[]
     */
    public $payTradeIds;

    /**
     * @example ""
     *
     * @var string
     */
    public $redirectUrl;
    protected $_name = [
        'allIdsMap'   => 'AllIdsMap',
        'lmOrderList' => 'LmOrderList',
        'orderIds'    => 'OrderIds',
        'payTradeIds' => 'PayTradeIds',
        'redirectUrl' => 'RedirectUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allIdsMap) {
            $res['AllIdsMap'] = $this->allIdsMap;
        }
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = $this->lmOrderList;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = $this->payTradeIds;
        }
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
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
        if (isset($map['AllIdsMap'])) {
            $model->allIdsMap = $map['AllIdsMap'];
        }
        if (isset($map['LmOrderList'])) {
            if (!empty($map['LmOrderList'])) {
                $model->lmOrderList = $map['LmOrderList'];
            }
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }
        if (isset($map['PayTradeIds'])) {
            if (!empty($map['PayTradeIds'])) {
                $model->payTradeIds = $map['PayTradeIds'];
            }
        }
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }

        return $model;
    }
}
