<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\ResetLiveManifestTimeshift;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ResetLiveManifestTimeshiftApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ResetLiveManifestTimeshiftApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Reset Live manifest time-shift
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ResetLiveManifestTimeShift $resetLiveManifestTimeShift
     * @return \BitmovinApiSdk\Models\ResetLiveManifestTimeShift
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ResetLiveManifestTimeShift $resetLiveManifestTimeShift) : \BitmovinApiSdk\Models\ResetLiveManifestTimeShift
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/reset-live-manifest-timeshift', $pathParams,  null, $resetLiveManifestTimeShift, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ResetLiveManifestTimeShift::class);
    }
}
