<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Sftp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Sftp\Customdata\CustomdataApi;

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
     * Create SFTP Input
     *
     * @param \BitmovinApiSdk\Models\SftpInput $sftpInput
     * @return \BitmovinApiSdk\Models\SftpInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SftpInput $sftpInput) : \BitmovinApiSdk\Models\SftpInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/sftp', [],  null, $sftpInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpInput::class);
    }

    /**
     * Delete SFTP Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\SftpInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\SftpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/sftp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpInput::class);
    }

    /**
     * SFTP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\SftpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\SftpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/sftp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SftpInput::class);
    }

    /**
     * List SFTP Inputs
     *
     * @param SftpInputListQueryParams|null $queryParams
     * @return SftpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(SftpInputListQueryParams $queryParams = null) : SftpInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/sftp', [], $queryParams, null, true);

        return ObjectMapper::map($response, SftpInputPaginationResponse::class);
    }
}
