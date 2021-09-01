<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponseBody\initApplyRefundData;
use AlibabaCloud\Tea\Model;

class InitApplyRefundResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $subLmOrderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var initApplyRefundData
     */
    public $initApplyRefundData;
    protected $_name = [
        'code'                => 'Code',
        'message'             => 'Message',
        'subLmOrderId'        => 'SubLmOrderId',
        'requestId'           => 'RequestId',
        'initApplyRefundData' => 'InitApplyRefundData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->initApplyRefundData) {
            $res['InitApplyRefundData'] = null !== $this->initApplyRefundData ? $this->initApplyRefundData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitApplyRefundResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InitApplyRefundData'])) {
            $model->initApplyRefundData = initApplyRefundData::fromMap($map['InitApplyRefundData']);
        }

        return $model;
    }
}
