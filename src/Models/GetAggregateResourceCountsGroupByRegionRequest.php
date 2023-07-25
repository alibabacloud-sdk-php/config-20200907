<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateResourceCountsGroupByRegionRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-a260626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the folder in the resource directory. For more information about how to obtain the ID of a folder, see [View the basic information of a folder](~~111223~~).
     *
     * @example r-BU****
     *
     * @var string
     */
    public $folderId;

    /**
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the resource.
     *
     * For more information about how to obtain the type of a resource, see [ListAggregateDiscoveredResources](~~265983~~).
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'folderId'          => 'FolderId',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'resourceType'      => 'ResourceType',
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
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
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
     * @return GetAggregateResourceCountsGroupByRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
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
