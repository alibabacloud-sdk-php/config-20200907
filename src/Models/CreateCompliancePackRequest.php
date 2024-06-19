<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\configRules;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\tagsScope;
use AlibabaCloud\Tea\Model;

class CreateCompliancePackRequest extends Model
{
    /**
     * @description The client token that you want to use to ensure the idempotency of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.``
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the compliance package.
     *
     * This parameter is required.
     * @example test-pack-name
     *
     * @var string
     */
    public $compliancePackName;

    /**
     * @description The ID of the compliance package template.
     *
     * You can call the [ListCompliancePackTemplates](https://help.aliyun.com/document_detail/261176.html) operation to obtain the ID of the compliance package.
     * @example ct-5f26ff4e06a300c4****
     *
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @description The rules in the compliance package. You must specify either this parameter or TemplateContent.
     *
     * @var configRules[]
     */
    public $configRules;

    /**
     * @description Specifies whether to enable the rule together with the compliance package. Valid values:
     *
     *   true: The system enables the rule together with the compliance package.
     *   false: The system does not enable the rule together with the compliance package.
     *
     * @example false
     *
     * @var bool
     */
    public $defaultEnable;

    /**
     * @description The description of the compliance package.
     *
     * @example Test pack description.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $excludeRegionIdsScope;

    /**
     * @var string
     */
    public $excludeResourceGroupIdsScope;

    /**
     * @description The ID of the resource that you do not want to evaluate by using the compliance package. Separate multiple resource IDs with commas (,).
     *
     * @example eip-8vbf3x310fn56ijfd****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;

    /**
     * @description The ID of the region whose resources you want to evaluate by using the compliance package. Separate multiple region IDs with commas (,).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The ID of the resource group whose resources you want to evaluate by using the compliance package. Separate multiple resource group IDs with commas (,).
     *
     * @example rg-aekzdibsjjc****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @var string
     */
    public $resourceIdsScope;

    /**
     * @description The risk level of the resources that are not compliant with the rules in the compliance package. Default value: 2. Valid values:
     *
     *   1: high.
     *   2: medium.
     *   3: low.
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The tag key of the resource that you want to evaluate by using the compliance package.
     *
     * @example ECS
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value of the resource that you want to evaluate by using the compliance package.
     *
     * >  You must configure the TagValueScope parameter together with the TagKeyScope parameter.
     * @example test
     *
     * @var string
     */
    public $tagValueScope;

    /**
     * @var tagsScope[]
     */
    public $tagsScope;

    /**
     * @description The information about the template that is used to generate the compliance package. You can call an API operation to view the details of an existing compliance package or write a compliance package template. For more information, see [Write a compliance package template in a configuration file](https://help.aliyun.com/document_detail/2659733.html). You must specify one of ConfigRules and TemplateContent.
     *
     * @example { "configRuleTemplates": [ { "configRuleName": "condition-rule-example", "scope": { "complianceResourceTypes": [ "ACS::ECS::Instance" ] }, "description": "", "source": { "owner": "CUSTOM_CONFIGURATION", "identifier": "acs-config-configuration", "sourceDetails": [ { "messageType": "ScheduledNotification", "maximumExecutionFrequency": "Twelve_Hours" }, { "messageType": "ConfigurationItemChangeNotification" } ], "conditions": "{\\\\"ComplianceConditions\\\\":\\\\"{\\\\\\\\\\"operator\\\\\\\\\\":\\\\\\\\\\"and\\\\\\\\\\",\\\\\\\\\\"children\\\\\\\\\\":[{\\\\\\\\\\"operator\\\\\\\\\\":\\\\\\\\\\"GreaterOrEquals\\\\\\\\\\",\\\\\\\\\\"featurePath\\\\\\\\\\":\\\\\\\\\\"$.Cpu\\\\\\\\\\",\\\\\\\\\\"featureSource\\\\\\\\\\":\\\\\\\\\\"CONFIGURATION\\\\\\\\\\",\\\\\\\\\\"desired\\\\\\\\\\":\\\\\\\\\\"2\\\\\\\\\\"}]}\\\\"}" }, "inputParameters": {} }, { "configRuleName": "oss-bucket-referer-limit", "scope": { "complianceResourceTypes": [ "ACS::OSS::Bucket" ] }, "description": "If the hotlink protection feature is enabled for the Object Storage Service (OSS) bucket and the Referer is added to a specific whitelist, the evaluation result is compliant.", "source": { "owner": "ALIYUN", "identifier": "oss-bucket-referer-limit", "sourceDetails": [ { "messageType": "ConfigurationItemChangeNotification" } ] }, "inputParameters": { "allowEmptyReferer": "true", "allowReferers": "http://www.aliyun.com" } } ] }
     *
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'clientToken'                  => 'ClientToken',
        'compliancePackName'           => 'CompliancePackName',
        'compliancePackTemplateId'     => 'CompliancePackTemplateId',
        'configRules'                  => 'ConfigRules',
        'defaultEnable'                => 'DefaultEnable',
        'description'                  => 'Description',
        'excludeRegionIdsScope'        => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope'      => 'ExcludeResourceIdsScope',
        'excludeTagsScope'             => 'ExcludeTagsScope',
        'regionIdsScope'               => 'RegionIdsScope',
        'resourceGroupIdsScope'        => 'ResourceGroupIdsScope',
        'resourceIdsScope'             => 'ResourceIdsScope',
        'riskLevel'                    => 'RiskLevel',
        'tagKeyScope'                  => 'TagKeyScope',
        'tagValueScope'                => 'TagValueScope',
        'tagsScope'                    => 'TagsScope',
        'templateContent'              => 'TemplateContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }
        if (null !== $this->configRules) {
            $res['ConfigRules'] = [];
            if (null !== $this->configRules && \is_array($this->configRules)) {
                $n = 0;
                foreach ($this->configRules as $item) {
                    $res['ConfigRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultEnable) {
            $res['DefaultEnable'] = $this->defaultEnable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->excludeRegionIdsScope) {
            $res['ExcludeRegionIdsScope'] = $this->excludeRegionIdsScope;
        }
        if (null !== $this->excludeResourceGroupIdsScope) {
            $res['ExcludeResourceGroupIdsScope'] = $this->excludeResourceGroupIdsScope;
        }
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->excludeTagsScope) {
            $res['ExcludeTagsScope'] = [];
            if (null !== $this->excludeTagsScope && \is_array($this->excludeTagsScope)) {
                $n = 0;
                foreach ($this->excludeTagsScope as $item) {
                    $res['ExcludeTagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }
        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
        }
        if (null !== $this->tagsScope) {
            $res['TagsScope'] = [];
            if (null !== $this->tagsScope && \is_array($this->tagsScope)) {
                $n = 0;
                foreach ($this->tagsScope as $item) {
                    $res['TagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCompliancePackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }
        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n                  = 0;
                foreach ($map['ConfigRules'] as $item) {
                    $model->configRules[$n++] = null !== $item ? configRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultEnable'])) {
            $model->defaultEnable = $map['DefaultEnable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExcludeRegionIdsScope'])) {
            $model->excludeRegionIdsScope = $map['ExcludeRegionIdsScope'];
        }
        if (isset($map['ExcludeResourceGroupIdsScope'])) {
            $model->excludeResourceGroupIdsScope = $map['ExcludeResourceGroupIdsScope'];
        }
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['ExcludeTagsScope'])) {
            if (!empty($map['ExcludeTagsScope'])) {
                $model->excludeTagsScope = [];
                $n                       = 0;
                foreach ($map['ExcludeTagsScope'] as $item) {
                    $model->excludeTagsScope[$n++] = null !== $item ? excludeTagsScope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }
        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }
        if (isset($map['TagsScope'])) {
            if (!empty($map['TagsScope'])) {
                $model->tagsScope = [];
                $n                = 0;
                foreach ($map['TagsScope'] as $item) {
                    $model->tagsScope[$n++] = null !== $item ? tagsScope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
