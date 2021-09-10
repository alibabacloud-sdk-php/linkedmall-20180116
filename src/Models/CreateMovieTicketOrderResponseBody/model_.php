<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody\model\orderIds;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody\model\payTradeIds;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $redirectUrl;

    /**
     * @var payTradeIds
     */
    public $payTradeIds;

    /**
     * @var orderIds
     */
    public $orderIds;
    protected $_name = [
        'redirectUrl' => 'RedirectUrl',
        'payTradeIds' => 'PayTradeIds',
        'orderIds'    => 'OrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = null !== $this->payTradeIds ? $this->payTradeIds->toMap() : null;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = null !== $this->orderIds ? $this->orderIds->toMap() : null;
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
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }
        if (isset($map['PayTradeIds'])) {
            $model->payTradeIds = payTradeIds::fromMap($map['PayTradeIds']);
        }
        if (isset($map['OrderIds'])) {
            $model->orderIds = orderIds::fromMap($map['OrderIds']);
        }

        return $model;
    }
}
