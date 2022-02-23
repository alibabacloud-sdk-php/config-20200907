<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponseBody\remediationDeleteResults;
use AlibabaCloud\Tea\Model;

class DeleteAggregateRemediationsResponseBody extends Model
{
    /**
     * @var remediationDeleteResults[]
     */
    public $remediationDeleteResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationDeleteResults' => 'RemediationDeleteResults',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationDeleteResults) {
            $res['RemediationDeleteResults'] = [];
            if (null !== $this->remediationDeleteResults && \is_array($this->remediationDeleteResults)) {
                $n = 0;
                foreach ($this->remediationDeleteResults as $item) {
                    $res['RemediationDeleteResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DeleteAggregateRemediationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationDeleteResults'])) {
            if (!empty($map['RemediationDeleteResults'])) {
                $model->remediationDeleteResults = [];
                $n                               = 0;
                foreach ($map['RemediationDeleteResults'] as $item) {
                    $model->remediationDeleteResults[$n++] = null !== $item ? remediationDeleteResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
