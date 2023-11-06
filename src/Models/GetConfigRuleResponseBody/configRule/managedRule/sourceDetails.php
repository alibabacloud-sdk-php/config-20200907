<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\managedRule;

use AlibabaCloud\Tea\Model;

class sourceDetails extends Model
{
    /**
     * @description The event source.
     *
     * >  Only events related to Cloud Config are supported. Valid value: aliyun.config.
     * @example aliyun.config
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The interval at which the rule is triggered. Valid values:
     *
     *   One_Hour: 1 hour
     *   Three_Hours: 3 hours
     *   Six_Hours: 6 hours.
     *   Twelve_Hours: 12 hours
     *   TwentyFour_Hours: 24 hours
     *
     * >  This parameter is returned if the managed rule is periodically triggered.
     * @example One_Hour
     *
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @description The trigger type of the rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The rule is triggered by configuration changes.
     *   ScheduledNotification: The rule is periodically triggered.
     *
     * @example ConfigurationItemChangeNotification
     *
     * @var string
     */
    public $messageType;
    protected $_name = [
        'eventSource'               => 'EventSource',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'messageType'               => 'MessageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        return $model;
    }
}
