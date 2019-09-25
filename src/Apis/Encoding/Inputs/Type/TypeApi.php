<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Type;

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
     * Get Input Type
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\InputTypeResponse
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\InputTypeResponse
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/{input_id}/type', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\InputTypeResponse::class);
    }
}
