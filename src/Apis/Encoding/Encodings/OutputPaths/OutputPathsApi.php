<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\OutputPaths;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class OutputPathsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * OutputPathsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Encoding Output Paths Retrieval
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\EncodingOutputPaths[]
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : array
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/output-paths', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingOutputPaths::class);
    }
}
