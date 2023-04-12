<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponseBody\complianceResult;

use AlibabaCloud\Tea\Model;

class compliances extends Model
{
    /**
     * @description The compliance evaluation result. Valid values:
     *
     *   COMPLIANT: The relevant resources are evaluated as compliant.
     *   NON_COMPLIANT: The relevant resources are evaluated as non-compliant.
     *   NOT_APPLICABLE: The rule does not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The number of resources that have the compliance evaluation result. For example, if the value of the `ComplianceType` parameter is `COMPLIANT`, this parameter value indicates the number of compliant resources.
     *
     * @example 5
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'count'          => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
