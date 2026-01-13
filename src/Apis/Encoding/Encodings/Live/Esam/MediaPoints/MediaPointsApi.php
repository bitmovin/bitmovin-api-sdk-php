<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\Esam\MediaPoints;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class MediaPointsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * MediaPointsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create ESAM media point for live stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\EsamMediaPoint $esamMediaPoint
     * @return \BitmovinApiSdk\Models\EsamMediaPoint
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\EsamMediaPoint $esamMediaPoint) : \BitmovinApiSdk\Models\EsamMediaPoint
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/esam/media-points', $pathParams,  null, $esamMediaPoint, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EsamMediaPoint::class);
    }
}
