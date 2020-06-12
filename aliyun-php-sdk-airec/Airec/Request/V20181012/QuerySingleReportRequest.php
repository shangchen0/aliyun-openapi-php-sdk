<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QuerySingleReport
 *
 * @method string getInstanceId()
 * @method string getReportType()
 */
class QuerySingleReportRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/sync-reports/single-report';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'QuerySingleReport',
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

    /**
     * @param string $reportType
     *
     * @return $this
     */
    public function setReportType($reportType)
    {
        $this->requestParameters['ReportType'] = $reportType;
        $this->queryParameters['ReportType'] = $reportType;

        return $this;
    }
}
