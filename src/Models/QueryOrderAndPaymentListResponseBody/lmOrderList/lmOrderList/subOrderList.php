<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList;

use AlibabaCloud\Tea\Model;

class subOrderList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList[]
     */
    public $subOrderList;
    protected $_name = [
        'subOrderList' => 'SubOrderList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subOrderList) {
            $res['SubOrderList'] = [];
            if (null !== $this->subOrderList && \is_array($this->subOrderList)) {
                $n = 0;
                foreach ($this->subOrderList as $item) {
                    $res['SubOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubOrderList'])) {
            if (!empty($map['SubOrderList'])) {
                $model->subOrderList = [];
                $n                   = 0;
                foreach ($map['SubOrderList'] as $item) {
                    $model->subOrderList[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
