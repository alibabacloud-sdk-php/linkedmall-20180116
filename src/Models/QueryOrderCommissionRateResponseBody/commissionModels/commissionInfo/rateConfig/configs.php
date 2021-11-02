<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo\rateConfig;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $valueUnit;
    protected $_name = [
        'value'     => 'Value',
        'valueUnit' => 'ValueUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueUnit) {
            $res['ValueUnit'] = $this->valueUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueUnit'])) {
            $model->valueUnit = $map['ValueUnit'];
        }

        return $model;
    }
}
