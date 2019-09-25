<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Sftp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Sftp\Customdata\CustomdataApi;

class SftpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SftpApi constructor.
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
     * Create SFTP Output
     *
     * @param \BitmovinApiSdk\Models\SftpOutput $sftpOutput
     * @return \BitmovinApiSdk\Models\SftpOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SftpOutput $sftpOutput) : \BitmovinApiSdk\Models\SftpOutput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/outputs/sftp', [],  null, $sftpOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpOutput::class);
    }

    /**
     * Delete SFTP Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\SftpOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\SftpOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/outputs/sftp/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpOutput::class);
    }

    /**
     * SFTP Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\SftpOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\SftpOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/sftp/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpOutput::class);
    }

    /**
     * List SFTP Outputs
     *
     * @param SftpOutputListQueryParams|null $queryParams
     * @return SftpOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(SftpOutputListQueryParams $queryParams = null) : SftpOutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/outputs/sftp', [], $queryParams, null, true);

        return ObjectMapper::map($response, SftpOutputPaginationResponse::class);
    }
}
