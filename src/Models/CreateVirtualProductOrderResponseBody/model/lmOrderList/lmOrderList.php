<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateVirtualProductOrderResponseBody\model\lmOrderList;

use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var string
     */
    public $lmOrderId;
    protected $_name = [
        'lmOrderId' => 'LmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }

        return $model;
    }
}
