<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles\discoveredResourceProfileList;
use AlibabaCloud\Tea\Model;

class discoveredResourceProfiles extends Model
{
    /**
     * @var discoveredResourceProfileList[]
     */
    public $discoveredResourceProfileList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $previousToken;
    protected $_name = [
        'discoveredResourceProfileList' => 'DiscoveredResourceProfileList',
        'maxResults'                    => 'MaxResults',
        'nextToken'                     => 'NextToken',
        'previousToken'                 => 'PreviousToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceProfileList) {
            $res['DiscoveredResourceProfileList'] = [];
            if (null !== $this->discoveredResourceProfileList && \is_array($this->discoveredResourceProfileList)) {
                $n = 0;
                foreach ($this->discoveredResourceProfileList as $item) {
                    $res['DiscoveredResourceProfileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceProfiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceProfileList'])) {
            if (!empty($map['DiscoveredResourceProfileList'])) {
                $model->discoveredResourceProfileList = [];
                $n                                    = 0;
                foreach ($map['DiscoveredResourceProfileList'] as $item) {
                    $model->discoveredResourceProfileList[$n++] = null !== $item ? discoveredResourceProfileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        return $model;
    }
}
