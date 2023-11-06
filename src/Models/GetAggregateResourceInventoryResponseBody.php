<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryResponseBody\resourceInventory;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceInventoryResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1A6D3604-EF1A-5798-A576-2A5FB855493C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource inventory.
     *
     * @var resourceInventory
     */
    public $resourceInventory;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceInventory' => 'ResourceInventory',
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
        if (null !== $this->resourceInventory) {
            $res['ResourceInventory'] = null !== $this->resourceInventory ? $this->resourceInventory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceInventoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceInventory'])) {
            $model->resourceInventory = resourceInventory::fromMap($map['ResourceInventory']);
        }

        return $model;
    }
}
