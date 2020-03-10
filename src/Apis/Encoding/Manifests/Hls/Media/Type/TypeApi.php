<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Type;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TypeApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TypeApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * HLS Media Type
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\MediaInfoTypeResponse
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\MediaInfoTypeResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/media/{media_id}/type', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MediaInfoTypeResponse::class);
    }
}
