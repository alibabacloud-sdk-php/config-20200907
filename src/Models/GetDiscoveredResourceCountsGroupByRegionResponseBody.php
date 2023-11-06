<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponseBody\discoveredResourceCountsSummary;
use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsGroupByRegionResponseBody extends Model
{
    /**
     * @description The statistics on the resources.
     *
     * @var discoveredResourceCountsSummary[]
     */
    public $discoveredResourceCountsSummary;

    /**
     * @description The request ID.
     *
     * @example 399BD94C-D20C-4D27-88D4-89E8D75C0595
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceCountsSummary' => 'DiscoveredResourceCountsSummary',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceCountsSummary) {
            $res['DiscoveredResourceCountsSummary'] = [];
            if (null !== $this->discoveredResourceCountsSummary && \is_array($this->discoveredResourceCountsSummary)) {
                $n = 0;
                foreach ($this->discoveredResourceCountsSummary as $item) {
                    $res['DiscoveredResourceCountsSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceCountsSummary'])) {
            if (!empty($map['DiscoveredResourceCountsSummary'])) {
                $model->discoveredResourceCountsSummary = [];
                $n                                      = 0;
                foreach ($map['DiscoveredResourceCountsSummary'] as $item) {
                    $model->discoveredResourceCountsSummary[$n++] = null !== $item ? discoveredResourceCountsSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
