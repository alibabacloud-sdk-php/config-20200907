<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles;

use AlibabaCloud\Tea\Model;

class discoveredResourceProfileList extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCreationTime;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'accountId'            => 'AccountId',
        'region'               => 'Region',
        'resourceCreationTime' => 'ResourceCreationTime',
        'resourceDeleted'      => 'ResourceDeleted',
        'resourceId'           => 'ResourceId',
        'resourceName'         => 'ResourceName',
        'resourceStatus'       => 'ResourceStatus',
        'resourceType'         => 'ResourceType',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreationTime) {
            $res['ResourceCreationTime'] = $this->resourceCreationTime;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceProfileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreationTime'])) {
            $model->resourceCreationTime = $map['ResourceCreationTime'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
