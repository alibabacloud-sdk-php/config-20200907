<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class evaluationResults extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-edd3626622af00b3****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The number of resources that are evaluated as non-compliant.
     *
     * @example 25
     *
     * @var int
     */
    public $nonCompliantResourceCnt;

    /**
     * @description The number of rules based on which resources are evaluated as non-compliant.
     *
     * @example 3
     *
     * @var int
     */
    public $nonCompliantRuleCnt;

    /**
     * @description The date on which the statistics are obtained.
     *
     * @example 2023-06-27
     *
     * @var string
     */
    public $statisticDate;

    /**
     * @description The total number of resources.
     *
     * @example 153
     *
     * @var int
     */
    public $totalResourceCnt;

    /**
     * @description The total number of rules.
     *
     * @example 10
     *
     * @var int
     */
    public $totalRuleCnt;
    protected $_name = [
        'aggregatorId'            => 'AggregatorId',
        'nonCompliantResourceCnt' => 'NonCompliantResourceCnt',
        'nonCompliantRuleCnt'     => 'NonCompliantRuleCnt',
        'statisticDate'           => 'StatisticDate',
        'totalResourceCnt'        => 'TotalResourceCnt',
        'totalRuleCnt'            => 'TotalRuleCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->nonCompliantResourceCnt) {
            $res['NonCompliantResourceCnt'] = $this->nonCompliantResourceCnt;
        }
        if (null !== $this->nonCompliantRuleCnt) {
            $res['NonCompliantRuleCnt'] = $this->nonCompliantRuleCnt;
        }
        if (null !== $this->statisticDate) {
            $res['StatisticDate'] = $this->statisticDate;
        }
        if (null !== $this->totalResourceCnt) {
            $res['TotalResourceCnt'] = $this->totalResourceCnt;
        }
        if (null !== $this->totalRuleCnt) {
            $res['TotalRuleCnt'] = $this->totalRuleCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['NonCompliantResourceCnt'])) {
            $model->nonCompliantResourceCnt = $map['NonCompliantResourceCnt'];
        }
        if (isset($map['NonCompliantRuleCnt'])) {
            $model->nonCompliantRuleCnt = $map['NonCompliantRuleCnt'];
        }
        if (isset($map['StatisticDate'])) {
            $model->statisticDate = $map['StatisticDate'];
        }
        if (isset($map['TotalResourceCnt'])) {
            $model->totalResourceCnt = $map['TotalResourceCnt'];
        }
        if (isset($map['TotalRuleCnt'])) {
            $model->totalRuleCnt = $map['TotalRuleCnt'];
        }

        return $model;
    }
}
