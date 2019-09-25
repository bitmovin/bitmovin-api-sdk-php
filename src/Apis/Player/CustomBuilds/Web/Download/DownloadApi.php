<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Download;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DownloadApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DownloadApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Custom Web Player Build Download Link
     *
     * @param string $customBuildId
     * @return \BitmovinApiSdk\Models\CustomPlayerBuildDownload
     * @throws BitmovinApiException
     */
    public function get(string $customBuildId) : \BitmovinApiSdk\Models\CustomPlayerBuildDownload
    {
        $pathParams = [
            'custom_build_id' => $customBuildId,
        ];
        $response = $this->httpWrapper->request('GET','/player/custom-builds/web/{custom_build_id}/download', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomPlayerBuildDownload::class);
    }
}
