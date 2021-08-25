<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponseBody\evaluationResults;
use AlibabaCloud\Tea\Model;

class ListAggregateConfigRuleEvaluationResultsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var evaluationResults
     */
    public $evaluationResults;
    protected $_name = [
        'requestId'         => 'RequestId',
        'evaluationResults' => 'EvaluationResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->evaluationResults) {
            $res['EvaluationResults'] = null !== $this->evaluationResults ? $this->evaluationResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EvaluationResults'])) {
            $model->evaluationResults = evaluationResults::fromMap($map['EvaluationResults']);
        }

        return $model;
    }
}
