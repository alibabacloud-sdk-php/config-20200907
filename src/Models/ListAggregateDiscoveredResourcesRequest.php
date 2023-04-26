<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateDiscoveredResourcesRequest extends Model
{
    /**
     * @description The tags of the resource.
     *
     * @example ca-c560626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The information about resources.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The type of the resource.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The timestamp when the resource was created. Unit: milliseconds.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regions;

    /**
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The return result of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDeleted;

    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example eni-hp31cqoba96jagtz****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The region ID.
     *
     * @example ACS::ECS::NetworkInterface
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'regions'           => 'Regions',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceDeleted'   => 'ResourceDeleted',
        'resourceId'        => 'ResourceId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'resourceTypes'     => 'ResourceTypes',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateDiscoveredResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
