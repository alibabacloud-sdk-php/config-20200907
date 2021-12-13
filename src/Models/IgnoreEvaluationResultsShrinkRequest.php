<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class IgnoreEvaluationResultsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourcesShrink;
    protected $_name = [
        'configRuleId'    => 'ConfigRuleId',
        'reason'          => 'Reason',
        'resourcesShrink' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourcesShrink) {
            $res['Resources'] = $this->resourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreEvaluationResultsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Resources'])) {
            $model->resourcesShrink = $map['Resources'];
        }

        return $model;
    }
}
