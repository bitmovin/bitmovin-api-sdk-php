<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Type;

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
     * Get Output Type
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\OutputTypeResponse
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\OutputTypeResponse
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/{output_id}/type', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OutputTypeResponse::class);
    }
}
