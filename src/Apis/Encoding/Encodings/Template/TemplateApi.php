<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Template;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TemplateApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TemplateApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Encoding Template URL
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\EncodingTemplateUrlResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\EncodingTemplateUrlResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/template', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingTemplateUrlResponse::class);
    }
}
