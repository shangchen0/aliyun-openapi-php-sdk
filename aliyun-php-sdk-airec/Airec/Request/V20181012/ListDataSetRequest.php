<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListDataSet
 *
 * @method string getInstanceId()
 */
class ListDataSetRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/dataSets';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'ListDataSet',
            'airec'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
