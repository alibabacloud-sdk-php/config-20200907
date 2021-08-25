<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateAggregateConfigRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputParametersShrink;

    /**
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @var string
     */
    public $resourceTypesScopeShrink;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionIdsScope;

    /**
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @var string
     */
    public $configRuleTriggerTypes;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @var string
     */
    public $tagKeyScope;

    /**
     * @var string
     */
    public $tagValueScope;
    protected $_name = [
        'configRuleId'              => 'ConfigRuleId',
        'description'               => 'Description',
        'inputParametersShrink'     => 'InputParameters',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'resourceTypesScopeShrink'  => 'ResourceTypesScope',
        'riskLevel'                 => 'RiskLevel',
        'clientToken'               => 'ClientToken',
        'regionIdsScope'            => 'RegionIdsScope',
        'excludeResourceIdsScope'   => 'ExcludeResourceIdsScope',
        'configRuleTriggerTypes'    => 'ConfigRuleTriggerTypes',
        'aggregatorId'              => 'AggregatorId',
        'resourceGroupIdsScope'     => 'ResourceGroupIdsScope',
        'tagKeyScope'               => 'TagKeyScope',
        'tagValueScope'             => 'TagValueScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputParametersShrink) {
            $res['InputParameters'] = $this->inputParametersShrink;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->resourceTypesScopeShrink) {
            $res['ResourceTypesScope'] = $this->resourceTypesScopeShrink;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->configRuleTriggerTypes) {
            $res['ConfigRuleTriggerTypes'] = $this->configRuleTriggerTypes;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }
        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAggregateConfigRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParametersShrink = $map['InputParameters'];
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScopeShrink = $map['ResourceTypesScope'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['ConfigRuleTriggerTypes'])) {
            $model->configRuleTriggerTypes = $map['ConfigRuleTriggerTypes'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }
        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }

        return $model;
    }
}
