<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressResponseBody\divisionAddress;

use AlibabaCloud\Tea\Model;

class divisionAddress extends Model
{
    /**
     * @var int
     */
    public $divisionCode;

    /**
     * @var int
     */
    public $divisionLevel;

    /**
     * @var string
     */
    public $divisionName;

    /**
     * @var int
     */
    public $parentId;
    protected $_name = [
        'divisionCode'  => 'DivisionCode',
        'divisionLevel' => 'DivisionLevel',
        'divisionName'  => 'DivisionName',
        'parentId'      => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->divisionLevel) {
            $res['DivisionLevel'] = $this->divisionLevel;
        }
        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return divisionAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['DivisionLevel'])) {
            $model->divisionLevel = $map['DivisionLevel'];
        }
        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
