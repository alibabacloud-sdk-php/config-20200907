<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponseBody\complianceResult;

use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponseBody\complianceResult\complianceResultList\compliances;
use AlibabaCloud\Tea\Model;

class complianceResultList extends Model
{
    /**
     * @description The queried evaluation results.
     *
     * @var compliances[]
     */
    public $compliances;

    /**
     * @description The region ID of the evaluated resource.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'compliances' => 'Compliances',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliances) {
            $res['Compliances'] = [];
            if (null !== $this->compliances && \is_array($this->compliances)) {
                $n = 0;
                foreach ($this->compliances as $item) {
                    $res['Compliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compliances'])) {
            if (!empty($map['Compliances'])) {
                $model->compliances = [];
                $n                  = 0;
                foreach ($map['Compliances'] as $item) {
                    $model->compliances[$n++] = null !== $item ? compliances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
