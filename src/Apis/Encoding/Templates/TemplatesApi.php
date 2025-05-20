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
     * Store an Encoding Template
     *
     * @param  $encodingTemplateRequest
     * @return \BitmovinApiSdk\Models\EncodingTemplateDetails
     * @throws BitmovinApiException
     */
    public function create( $encodingTemplateRequest) : \BitmovinApiSdk\Models\EncodingTemplateDetails
    {
        $response = $this->httpWrapper->request('POST', '/encoding/templates', [],  null, $encodingTemplateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingTemplateDetails::class);
    }

    /**
     * Delete Encoding Template
     *
     * @param string $encodingTemplateId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingTemplateId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_template_id' => $encodingTemplateId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/templates/{encoding_template_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Encoding Template details
     *
     * @param string $encodingTemplateId
     * @return \BitmovinApiSdk\Models\EncodingTemplateDetails
     * @throws BitmovinApiException
     */
    public function get(string $encodingTemplateId) : \BitmovinApiSdk\Models\EncodingTemplateDetails
    {
        $pathParams = [
            'encoding_template_id' => $encodingTemplateId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/templates/{encoding_template_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingTemplateDetails::class);
    }

    /**
     * List stored Encoding Templates
     *
     * @param EncodingTemplateResponseListQueryParams|null $queryParams
     * @return EncodingTemplateResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingTemplateResponseListQueryParams $queryParams = null) : EncodingTemplateResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/templates', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingTemplateResponsePaginationResponse::class);
    }

    /**
     * Start an Encoding defined with an Encoding Template
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
