<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackRequest\configRules;
use AlibabaCloud\Tea\Model;

class UpdateCompliancePackRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var string
     */
    public $compliancePackName;

    /**
     * @var configRules[]
     */
    public $configRules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'compliancePackId'   => 'CompliancePackId',
        'compliancePackName' => 'CompliancePackName',
        'configRules'        => 'ConfigRules',
        'description'        => 'Description',
        'riskLevel'          => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }
        if (null !== $this->configRules) {
            $res['ConfigRules'] = [];
            if (null !== $this->configRules && \is_array($this->configRules)) {
                $n = 0;
                foreach ($this->configRules as $item) {
                    $res['ConfigRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCompliancePackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }
        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n                  = 0;
                foreach ($map['ConfigRules'] as $item) {
                    $model->configRules[$n++] = null !== $item ? configRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
