<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics\logisticsDetailList\logisticsDetailList;
use AlibabaCloud\Tea\Model;

class logisticsDetailList extends Model
{
    /**
     * @var logisticsDetailList[]
     */
    public $logisticsDetailList;
    protected $_name = [
        'logisticsDetailList' => 'LogisticsDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsDetailList) {
            $res['LogisticsDetailList'] = [];
            if (null !== $this->logisticsDetailList && \is_array($this->logisticsDetailList)) {
                $n = 0;
                foreach ($this->logisticsDetailList as $item) {
                    $res['LogisticsDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogisticsDetailList'])) {
            if (!empty($map['LogisticsDetailList'])) {
                $model->logisticsDetailList = [];
                $n                          = 0;
                foreach ($map['LogisticsDetailList'] as $item) {
                    $model->logisticsDetailList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
