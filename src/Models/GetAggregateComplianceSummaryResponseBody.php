<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponseBody\complianceSummary;
use AlibabaCloud\Tea\Model;

class GetAggregateComplianceSummaryResponseBody extends Model
{
    /**
     * @description The compliance statistics.
     *
     * @var complianceSummary
     */
    public $complianceSummary;

    /**
     * @description The request ID.
     *
     * @example 929B8360-BD57-54FF-96DB-AD1D9B476769
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complianceSummary' => 'ComplianceSummary',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceSummary) {
            $res['ComplianceSummary'] = null !== $this->complianceSummary ? $this->complianceSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateComplianceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceSummary'])) {
            $model->complianceSummary = complianceSummary::fromMap($map['ComplianceSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
