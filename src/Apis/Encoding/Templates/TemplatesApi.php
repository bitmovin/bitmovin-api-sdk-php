<?php

namespace BitmovinApiSdk\Apis\Encoding\Templates;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TemplatesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TemplatesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * BETA: Start an Encoding defined with an Encoding Template
     *
     * @param  $encodingTemplateRequest
     * @return \BitmovinApiSdk\Models\EncodingTemplateStartResponse
     * @throws BitmovinApiException
     */
    public function start( $encodingTemplateRequest) : \BitmovinApiSdk\Models\EncodingTemplateStartResponse
    {
        $response = $this->httpWrapper->request('POST', '/encoding/templates/start', [],  null, $encodingTemplateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingTemplateStartResponse::class);
    }
}
