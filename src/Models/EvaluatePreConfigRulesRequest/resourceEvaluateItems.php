<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems\rules;

class resourceEvaluateItems extends Model
{
    /**
     * @var string
     */
    public $resourceLogicalId;

    /**
     * @var string
     */
    public $resourceProperties;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'resourceLogicalId' => 'ResourceLogicalId',
        'resourceProperties' => 'ResourceProperties',
        'resourceType' => 'ResourceType',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceLogicalId) {
            $res['ResourceLogicalId'] = $this->resourceLogicalId;
        }

        if (null !== $this->resourceProperties) {
            $res['ResourceProperties'] = $this->resourceProperties;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceLogicalId'])) {
            $model->resourceLogicalId = $map['ResourceLogicalId'];
        }

        if (isset($map['ResourceProperties'])) {
            $model->resourceProperties = $map['ResourceProperties'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
