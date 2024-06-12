<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeactiveAggregateConfigRulesRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-04b3fd170e340007****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The rule ID. Separate multiple rule IDs with commas (,).
     *
     * This parameter is required.
     * @example cr-5772ba41209e007b****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'aggregatorId'  => 'AggregatorId',
        'configRuleIds' => 'ConfigRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeactiveAggregateConfigRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
