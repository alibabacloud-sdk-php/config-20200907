<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponseBody;

use AlibabaCloud\Tea\Model;

class resourceComplianceResult extends Model
{
    /**
     * @description The ID of the compliance package.
     *
     * @example cp-fdc8626622af00f9****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The number of non-compliant resources.
     *
     * @example 7
     *
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @description The total number of monitored resources.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliancePackId'  => 'CompliancePackId',
        'nonCompliantCount' => 'NonCompliantCount',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceComplianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
