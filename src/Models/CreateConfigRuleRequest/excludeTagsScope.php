<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleRequest;

use AlibabaCloud\Tea\Model;

class excludeTagsScope extends Model
{
    /**
     * @description TagKey
     *
     * @example key-2
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description TagValue
     *
     * @example value-2
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excludeTagsScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
