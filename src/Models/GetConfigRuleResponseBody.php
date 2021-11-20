<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule;
use AlibabaCloud\Tea\Model;

class GetConfigRuleResponseBody extends Model
{
    /**
     * @var configRule
     */
    public $configRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRule' => 'ConfigRule',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRule) {
            $res['ConfigRule'] = null !== $this->configRule ? $this->configRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRule'])) {
            $model->configRule = configRule::fromMap($map['ConfigRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
