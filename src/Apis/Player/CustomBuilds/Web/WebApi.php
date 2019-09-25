<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Domains\DomainsApi;
use BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Status\StatusApi;
use BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Download\DownloadApi;

class WebApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DomainsApi */
    public $domains;

    /** @var StatusApi */
    public $status;

    /** @var DownloadApi */
    public $download;

    /**
     * WebApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->domains = new DomainsApi(null, $this->httpWrapper);
        $this->status = new StatusApi(null, $this->httpWrapper);
        $this->download = new DownloadApi(null, $this->httpWrapper);
    }

    /**
     * Add Custom Web Player Build
     *
     * @param \BitmovinApiSdk\Models\CustomPlayerBuildDetails $customPlayerBuildDetails
     * @return \BitmovinApiSdk\Models\CustomPlayerBuildDetails
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\CustomPlayerBuildDetails $customPlayerBuildDetails) : \BitmovinApiSdk\Models\CustomPlayerBuildDetails
    {
        
        $response = $this->httpWrapper->request('POST','/player/custom-builds/web', [],  null, $customPlayerBuildDetails, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomPlayerBuildDetails::class);
    }

    /**
     * Custom Web Player Build Details
     *
     * @param string $customBuildId
     * @return \BitmovinApiSdk\Models\CustomPlayerBuildStatus
     * @throws BitmovinApiException
     */
    public function get(string $customBuildId) : \BitmovinApiSdk\Models\CustomPlayerBuildStatus
    {
        $pathParams = [
            'custom_build_id' => $customBuildId,
        ];
        $response = $this->httpWrapper->request('GET','/player/custom-builds/web/{custom_build_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomPlayerBuildStatus::class);
    }

    /**
     * List Custom Web Player Builds
     *
     * @return CustomPlayerBuildDetailsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : CustomPlayerBuildDetailsPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/player/custom-builds/web', [],  null, null, true);

        return ObjectMapper::map($response, CustomPlayerBuildDetailsPaginationResponse::class);
    }

    /**
     * Start Custom Web Player Build
     *
     * @param string $customBuildId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $customBuildId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'custom_build_id' => $customBuildId,
        ];
        $response = $this->httpWrapper->request('POST','/player/custom-builds/web/{custom_build_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
