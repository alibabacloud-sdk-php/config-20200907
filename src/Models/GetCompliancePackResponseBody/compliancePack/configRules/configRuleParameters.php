<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack\configRules;

use AlibabaCloud\Tea\Model;

class configRuleParameters extends Model
{
    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'required'       => 'Required',
        'parameterName'  => 'ParameterName',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
