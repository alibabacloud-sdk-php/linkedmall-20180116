<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class deliveryInfoList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $postFee;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'displayName' => 'DisplayName',
        'postFee'     => 'PostFee',
        'serviceType' => 'ServiceType',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->postFee) {
            $res['PostFee'] = $this->postFee;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['PostFee'])) {
            $model->postFee = $map['PostFee'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
