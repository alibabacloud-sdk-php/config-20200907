<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponseBody\compliancePacksResult;

use AlibabaCloud\Tea\Model;

class compliancePacks extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $compliancePackName;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'status'                   => 'Status',
        'riskLevel'                => 'RiskLevel',
        'compliancePackId'         => 'CompliancePackId',
        'description'              => 'Description',
        'compliancePackName'       => 'CompliancePackName',
        'accountId'                => 'AccountId',
        'aggregatorId'             => 'AggregatorId',
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'createTimestamp'          => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliancePacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
