<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachAggregateConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachAggregateConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Config extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-shanghai'    => 'config.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'config.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('config', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ActiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActiveAggregateConfigRulesRequest $request
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachAggregateConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param AttachConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachConfigRuleToCompliancePackRequest $request
     *
     * @return AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->compliancePackTemplateId)) {
            $body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAggregateCompliancePackRequest $request
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $query['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAggregateConfigDeliveryChannelRequest $request
     *
     * @return CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeAccountIdsScope)) {
            $body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }
        if (!Utils::isUnset($request->excludeFolderIdsScope)) {
            $body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        if (!Utils::isUnset($request->folderIdsScope)) {
            $body['FolderIdsScope'] = $request->folderIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIdentifier)) {
            $body['SourceIdentifier'] = $request->sourceIdentifier;
        }
        if (!Utils::isUnset($request->sourceOwner)) {
            $body['SourceOwner'] = $request->sourceOwner;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAggregateConfigRuleRequest $request
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAggregateRemediationRequest $request
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorAccountsShrink)) {
            $body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }
        if (!Utils::isUnset($request->aggregatorName)) {
            $body['AggregatorName'] = $request->aggregatorName;
        }
        if (!Utils::isUnset($request->aggregatorType)) {
            $body['AggregatorType'] = $request->aggregatorType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAggregatorRequest $request
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param CreateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->compliancePackTemplateId)) {
            $body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCompliancePackRequest $request
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $query['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigDeliveryChannelRequest $request
     *
     * @return CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIdentifier)) {
            $body['SourceIdentifier'] = $request->sourceIdentifier;
        }
        if (!Utils::isUnset($request->sourceOwner)) {
            $body['SourceOwner'] = $request->sourceOwner;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigRuleRequest $request
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemediationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRemediationResponse
     */
    public function createRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRemediationRequest $request
     *
     * @return CreateRemediationResponse
     */
    public function createRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemediationWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactiveAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeactiveAggregateConfigRulesRequest $request
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveConfigRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactiveConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeactiveConfigRulesRequest $request
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateCompliancePacksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackIds)) {
            $body['CompliancePackIds'] = $request->compliancePackIds;
        }
        if (!Utils::isUnset($request->deleteRule)) {
            $body['DeleteRule'] = $request->deleteRule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAggregateCompliancePacksRequest $request
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAggregateConfigRulesRequest $request
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateRemediationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->remediationIds)) {
            $body['RemediationIds'] = $request->remediationIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAggregateRemediationsRequest $request
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregatorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorIds)) {
            $body['AggregatorIds'] = $request->aggregatorIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregators',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAggregatorsRequest $request
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCompliancePacksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackIds)) {
            $body['CompliancePackIds'] = $request->compliancePackIds;
        }
        if (!Utils::isUnset($request->deleteRule)) {
            $body['DeleteRule'] = $request->deleteRule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCompliancePacksRequest $request
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRemediationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->remediationIds)) {
            $body['RemediationIds'] = $request->remediationIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRemediationsRequest $request
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachAggregateConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param DetachConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachConfigRuleToCompliancePackRequest $request
     *
     * @return DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateAggregateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateAggregateCompliancePackReportRequest $request
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $body['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateAggregateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateAggregateConfigRulesReportRequest $request
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateCompliancePackReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateCompliancePackReportRequest $request
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateConfigRulesReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $body['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateConfigRulesReportRequest $request
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateAccountComplianceByPackRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateAccountComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateAccountComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateAccountComplianceByPackRequest $request
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAccountComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateCompliancePackRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateCompliancePackRequest $request
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateCompliancePackReportRequest $request
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateConfigDeliveryChannelRequest $request
     *
     * @return GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleRequest $request
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRuleComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRuleSummaryByRiskLevel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRulesReportRequest $request
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateDiscoveredResourceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateDiscoveredResource',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateDiscoveredResourceRequest $request
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceByConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceByPackRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceByPackRequest $request
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceTimelineRequest $request
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceConfigurationTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceCountsGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceCountsGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregatorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAggregatorResponse
     */
    public function getAggregatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAggregatorRequest $request
     *
     * @return GetAggregatorResponse
     */
    public function getAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param GetCompliancePackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCompliancePackRequest $request
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param GetCompliancePackReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCompliancePackReportRequest $request
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConfigDeliveryChannelRequest $request
     *
     * @return GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConfigRuleRequest $request
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRuleComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConfigRuleComplianceByPackRequest $request
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevelWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetConfigRuleSummaryByRiskLevel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleSummaryByRiskLevelWithOptions($runtime);
    }

    /**
     * @param GetConfigRulesReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConfigRulesReportRequest $request
     *
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDiscoveredResourceResponse
     */
    public function getDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResource',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceRequest $request
     *
     * @return GetDiscoveredResourceResponse
     */
    public function getDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceCountsGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceCountsGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetManagedRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetManagedRuleResponse
     */
    public function getManagedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetManagedRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetManagedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetManagedRuleRequest $request
     *
     * @return GetManagedRuleResponse
     */
    public function getManagedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceByConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceComplianceByConfigRuleRequest $request
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceByPackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceComplianceByPackRequest $request
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceGroupByRegionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceComplianceGroupByRegionRequest $request
     *
     * @return GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceComplianceGroupByResourceTypeRequest $request
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceComplianceTimelineRequest $request
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceConfigurationTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceConfigurationTimelineRequest $request
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @param IgnoreAggregateEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IgnoreAggregateEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->ignoreDate)) {
            $body['IgnoreDate'] = $request->ignoreDate;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IgnoreAggregateEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreAggregateEvaluationResultsRequest $request
     *
     * @return IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param IgnoreEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IgnoreEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->ignoreDate)) {
            $body['IgnoreDate'] = $request->ignoreDate;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IgnoreEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreEvaluationResultsRequest $request
     *
     * @return IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateCompliancePacksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateCompliancePacksRequest $request
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateConfigDeliveryChannelsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->deliveryChannelIds)) {
            $query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigDeliveryChannels',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateConfigDeliveryChannelsRequest $request
     *
     * @return ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigRuleEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateConfigRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateConfigRulesRequest $request
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateDiscoveredResourcesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateDiscoveredResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateDiscoveredResourcesRequest $request
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateRemediationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateRemediationsRequest $request
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateResourceEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregateResourceEvaluationResultsRequest $request
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregatorsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregators',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAggregatorsRequest $request
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @param ListCompliancePackTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCompliancePackTemplates',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCompliancePackTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCompliancePackTemplatesRequest $request
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePackTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListCompliancePacksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCompliancePacksRequest $request
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigDeliveryChannelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryChannelIds)) {
            $query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigDeliveryChannels',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfigDeliveryChannelsRequest $request
     *
     * @return ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigRuleEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfigRuleEvaluationResultsRequest $request
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListDiscoveredResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiscoveredResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDiscoveredResourcesRequest $request
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListManagedRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListManagedRulesResponse
     */
    public function listManagedRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListManagedRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListManagedRulesRequest $request
     *
     * @return ListManagedRulesResponse
     */
    public function listManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListRemediationTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->managedRuleIdentifier)) {
            $query['ManagedRuleIdentifier'] = $request->managedRuleIdentifier;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $query['RemediationType'] = $request->remediationType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRemediationTemplates',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRemediationTemplatesRequest $request
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListRemediationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRemediationsResponse
     */
    public function listRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRemediationsRequest $request
     *
     * @return ListRemediationsResponse
     */
    public function listRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceEvaluationResultsRequest $request
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param RevertAggregateEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevertAggregateEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevertAggregateEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevertAggregateEvaluationResultsRequest $request
     *
     * @return RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param RevertEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RevertEvaluationResultsResponse
     */
    public function revertEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevertEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevertEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevertEvaluationResultsRequest $request
     *
     * @return RevertEvaluationResultsResponse
     */
    public function revertEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param StartAggregateConfigRuleEvaluationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->revertEvaluation)) {
            $query['RevertEvaluation'] = $request->revertEvaluation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAggregateConfigRuleEvaluation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAggregateConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartAggregateConfigRuleEvaluationRequest $request
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * @param StartAggregateRemediationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartAggregateRemediationRequest $request
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param StartRemediationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRemediationResponse
     */
    public function startRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRemediationRequest $request
     *
     * @return StartRemediationResponse
     */
    public function startRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRemediationWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAggregateCompliancePackRequest $request
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAggregateConfigDeliveryChannelRequest $request
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeAccountIdsScope)) {
            $body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }
        if (!Utils::isUnset($request->excludeFolderIdsScope)) {
            $body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        if (!Utils::isUnset($request->folderIdsScope)) {
            $body['FolderIdsScope'] = $request->folderIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAggregateConfigRuleRequest $request
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationId)) {
            $body['RemediationId'] = $request->remediationId;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAggregateRemediationRequest $request
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorAccountsShrink)) {
            $body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->aggregatorName)) {
            $body['AggregatorName'] = $request->aggregatorName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAggregatorRequest $request
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCompliancePackRequest $request
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConfigDeliveryChannelRequest $request
     *
     * @return UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConfigRuleRequest $request
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigRuleWithOptions($request, $runtime);
    }
}
