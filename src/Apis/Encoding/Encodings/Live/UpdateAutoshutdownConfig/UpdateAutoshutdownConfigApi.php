<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\UpdateAutoshutdownConfig;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class UpdateAutoshutdownConfigApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * UpdateAutoshutdownConfigApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Replace Live Auto Shutdown Configuration
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\LiveAutoShutdownConfigurationUpdateRequest $liveAutoShutdownConfigurationUpdateRequest
     * @return \BitmovinApiSdk\Models\LiveAutoShutdownConfigurationUpdateResponse
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\LiveAutoShutdownConfigurationUpdateRequest $liveAutoShutdownConfigurationUpdateRequest) : \BitmovinApiSdk\Models\LiveAutoShutdownConfigurationUpdateResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/update-autoshutdown-config', $pathParams,  null, $liveAutoShutdownConfigurationUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveAutoShutdownConfigurationUpdateResponse::class);
    }
}
