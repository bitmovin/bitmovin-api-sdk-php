<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Ftp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Ftp\Customdata\CustomdataApi;

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
     * Create FTP Output
     *
     * @param \BitmovinApiSdk\Models\FtpOutput $ftpOutput
     * @return \BitmovinApiSdk\Models\FtpOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\FtpOutput $ftpOutput) : \BitmovinApiSdk\Models\FtpOutput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/outputs/ftp', [],  null, $ftpOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpOutput::class);
    }

    /**
     * Delete FTP Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\FtpOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\FtpOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/outputs/ftp/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpOutput::class);
    }

    /**
     * FTP Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\FtpOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\FtpOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/ftp/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FtpOutput::class);
    }

    /**
     * List FTP Outputs
     *
     * @param FtpOutputListQueryParams|null $queryParams
     * @return FtpOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(FtpOutputListQueryParams $queryParams = null) : FtpOutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/outputs/ftp', [], $queryParams, null, true);

        return ObjectMapper::map($response, FtpOutputPaginationResponse::class);
    }
}
