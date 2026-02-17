<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\Encodings\Actions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ActionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ActionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Update the ingest points of a Redundant RTMP Input
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\UpdateEncodingRtmpIngestPointRequest $updateEncodingRtmpIngestPointRequest
     * @return \BitmovinApiSdk\Models\UpdateEncodingRtmpIngestPointResponse
     * @throws BitmovinApiException
     */
    public function patch(string $encodingId, \BitmovinApiSdk\Models\UpdateEncodingRtmpIngestPointRequest $updateEncodingRtmpIngestPointRequest) : \BitmovinApiSdk\Models\UpdateEncodingRtmpIngestPointResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/encoding/live/encodings/{encoding_id}/actions/update-rtmp-ingest-points', $pathParams,  null, $updateEncodingRtmpIngestPointRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UpdateEncodingRtmpIngestPointResponse::class);
    }
}
