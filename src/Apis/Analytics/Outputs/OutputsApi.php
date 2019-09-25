<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased\S3RoleBasedApi;

class OutputsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var S3RoleBasedApi */
    public $s3RoleBased;

    /**
     * OutputsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->s3RoleBased = new S3RoleBasedApi(null, $this->httpWrapper);
    }
}
