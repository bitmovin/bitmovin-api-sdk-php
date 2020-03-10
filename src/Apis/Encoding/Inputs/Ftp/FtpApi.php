<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Ftp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Ftp\Customdata\CustomdataApi;

class FtpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * FtpApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Create FTP Input
     *
     * @param \BitmovinApiSdk\Models\FtpInput $ftpInput
     * @return \BitmovinApiSdk\Models\FtpInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\FtpInput $ftpInput) : \BitmovinApiSdk\Models\FtpInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/ftp', [],  null, $ftpInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpInput::class);
    }

    /**
     * Delete FTP Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\FtpInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\FtpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/ftp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpInput::class);
    }

    /**
     * FTP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\FtpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\FtpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/ftp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpInput::class);
    }

    /**
     * List FTP Inputs
     *
     * @param FtpInputListQueryParams|null $queryParams
     * @return FtpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(FtpInputListQueryParams $queryParams = null) : FtpInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/ftp', [], $queryParams, null, true);

        return ObjectMapper::map($response, FtpInputPaginationResponse::class);
    }
}
