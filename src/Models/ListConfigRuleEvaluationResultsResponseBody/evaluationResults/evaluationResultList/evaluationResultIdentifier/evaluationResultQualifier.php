<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;

use AlibabaCloud\Tea\Model;

class evaluationResultQualifier extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var string
     */
    public $configRuleArn;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'configRuleArn'    => 'ConfigRuleArn',
        'configRuleId'     => 'ConfigRuleId',
        'configRuleName'   => 'ConfigRuleName',
        'regionId'         => 'RegionId',
        'resourceId'       => 'ResourceId',
        'resourceName'     => 'ResourceName',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'resourceType'     => 'ResourceType',
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
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResultQualifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
