<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsResponseBody\failedItemList;
use AlibabaCloud\Tea\Model;

class ModifyBizItemsResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var failedItemList
     */
    public $failedItemList;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

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
     * @example 204F5C60-0B34-5718-AF93-9BD26B37****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 19
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'           => 'Code',
        'failedItemList' => 'FailedItemList',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->failedItemList) {
            $res['FailedItemList'] = null !== $this->failedItemList ? $this->failedItemList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBizItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailedItemList'])) {
            $model->failedItemList = failedItemList::fromMap($map['FailedItemList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
