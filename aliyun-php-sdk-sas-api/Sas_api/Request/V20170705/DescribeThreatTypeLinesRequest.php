<?php

namespace Sas_api\Request\V20170705;

/**
 * Request of DescribeThreatTypeLines
 *
 * @method string getSourceIp()
 * @method string getApiType()
 */
class DescribeThreatTypeLinesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Sas-api',
            '2017-07-05',
            'DescribeThreatTypeLines',
            'sas-api'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $apiType
     *
     * @return $this
     */
    public function setApiType($apiType)
    {
        $this->requestParameters['ApiType'] = $apiType;
        $this->queryParameters['ApiType'] = $apiType;

        return $this;
    }
}
