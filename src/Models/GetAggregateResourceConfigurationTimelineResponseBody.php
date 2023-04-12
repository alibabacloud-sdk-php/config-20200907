<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceConfigurationTimelineResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ED9CD1B3-286C-4E05-A765-5E1E0B9BC2AB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the configuration timeline.
     *
     * @var resourceConfigurationTimeline
     */
    public $resourceConfigurationTimeline;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'resourceConfigurationTimeline' => 'ResourceConfigurationTimeline',
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
        if (null !== $this->resourceConfigurationTimeline) {
            $res['ResourceConfigurationTimeline'] = null !== $this->resourceConfigurationTimeline ? $this->resourceConfigurationTimeline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceConfigurationTimelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceConfigurationTimeline'])) {
            $model->resourceConfigurationTimeline = resourceConfigurationTimeline::fromMap($map['ResourceConfigurationTimeline']);
        }

        return $model;
    }
}
