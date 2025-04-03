<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest\aggregatorAccounts;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest\tag;

class UpdateAggregatorRequest extends Model
{
    /**
     * @var aggregatorAccounts[]
     */
    public $aggregatorAccounts;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $aggregatorName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'aggregatorAccounts' => 'AggregatorAccounts',
        'aggregatorId' => 'AggregatorId',
        'aggregatorName' => 'AggregatorName',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'folderId' => 'FolderId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->aggregatorAccounts)) {
            Model::validateArray($this->aggregatorAccounts);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorAccounts) {
            if (\is_array($this->aggregatorAccounts)) {
                $res['AggregatorAccounts'] = [];
                $n1 = 0;
                foreach ($this->aggregatorAccounts as $item1) {
                    $res['AggregatorAccounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AggregatorAccounts'])) {
            if (!empty($map['AggregatorAccounts'])) {
                $model->aggregatorAccounts = [];
                $n1 = 0;
                foreach ($map['AggregatorAccounts'] as $item1) {
                    $model->aggregatorAccounts[$n1++] = aggregatorAccounts::fromMap($item1);
                }
            }
        }

        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
