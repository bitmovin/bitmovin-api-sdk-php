<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\S3\S3Api;
use BitmovinApiSdk\Apis\Encoding\Outputs\S3RoleBased\S3RoleBasedApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\GenericS3\GenericS3Api;
use BitmovinApiSdk\Apis\Encoding\Outputs\Local\LocalApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\Gcs\GcsApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\GcsServiceAccount\GcsServiceAccountApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\Azure\AzureApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\Ftp\FtpApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\Sftp\SftpApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiMsl\AkamaiMslApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiNetstorage\AkamaiNetstorageApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\LiveMediaIngest\LiveMediaIngestApi;

class OutputsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var S3Api */
    public $s3;

    /** @var S3RoleBasedApi */
    public $s3RoleBased;

    /** @var GenericS3Api */
    public $genericS3;

    /** @var LocalApi */
    public $local;

    /** @var GcsApi */
    public $gcs;

    /** @var GcsServiceAccountApi */
    public $gcsServiceAccount;

    /** @var AzureApi */
    public $azure;

    /** @var FtpApi */
    public $ftp;

    /** @var SftpApi */
    public $sftp;

    /** @var AkamaiMslApi */
    public $akamaiMsl;

    /** @var AkamaiNetstorageApi */
    public $akamaiNetstorage;

    /** @var LiveMediaIngestApi */
    public $liveMediaIngest;

    /**
     * OutputsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->s3 = new S3Api(null, $this->httpWrapper);
        $this->s3RoleBased = new S3RoleBasedApi(null, $this->httpWrapper);
        $this->genericS3 = new GenericS3Api(null, $this->httpWrapper);
        $this->local = new LocalApi(null, $this->httpWrapper);
        $this->gcs = new GcsApi(null, $this->httpWrapper);
        $this->gcsServiceAccount = new GcsServiceAccountApi(null, $this->httpWrapper);
        $this->azure = new AzureApi(null, $this->httpWrapper);
        $this->ftp = new FtpApi(null, $this->httpWrapper);
        $this->sftp = new SftpApi(null, $this->httpWrapper);
        $this->akamaiMsl = new AkamaiMslApi(null, $this->httpWrapper);
        $this->akamaiNetstorage = new AkamaiNetstorageApi(null, $this->httpWrapper);
        $this->liveMediaIngest = new LiveMediaIngestApi(null, $this->httpWrapper);
    }

    /**
     * Get Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\Output
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\Output
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Output::class);
    }

    /**
     * List all Outputs
     *
     * @param OutputListQueryParams|null $queryParams
     * @return OutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(OutputListQueryParams $queryParams = null) : OutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs', [], $queryParams, null, true);

        return ObjectMapper::map($response, OutputPaginationResponse::class);
    }
}
