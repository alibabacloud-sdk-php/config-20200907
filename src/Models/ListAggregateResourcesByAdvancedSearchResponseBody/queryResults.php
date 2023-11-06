<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourcesByAdvancedSearchResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourcesByAdvancedSearchResponseBody\queryResults\queryResultList;
use AlibabaCloud\Tea\Model;

class queryResults extends Model
{
    /**
     * @description The queried resources. A maximum of 1,000 data records can be returned. To view more data, use the download URL of the resource file.
     *
     * @var queryResultList
     */
    public $queryResultList;
    protected $_name = [
        'queryResultList' => 'QueryResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResultList) {
            $res['QueryResultList'] = null !== $this->queryResultList ? $this->queryResultList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryResultList'])) {
            $model->queryResultList = queryResultList::fromMap($map['QueryResultList']);
        }

        return $model;
    }
}
