<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Rtmp\RtmpApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\RedundantRtmp\RedundantRtmpApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\S3\S3Api;
use BitmovinApiSdk\Apis\Encoding\Inputs\S3RoleBased\S3RoleBasedApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\GenericS3\GenericS3Api;
use BitmovinApiSdk\Apis\Encoding\Inputs\Local\LocalApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Gcs\GcsApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\GcsServiceAccount\GcsServiceAccountApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Azure\AzureApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Ftp\FtpApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Sftp\SftpApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Http\HttpApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Https\HttpsApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Aspera\AsperaApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\AkamaiNetstorage\AkamaiNetstorageApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Srt\SrtApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\Zixi\ZixiApi;

class InputsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var RtmpApi */
    public $rtmp;

    /** @var RedundantRtmpApi */
    public $redundantRtmp;

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

    /** @var HttpApi */
    public $http;

    /** @var HttpsApi */
    public $https;

    /** @var AsperaApi */
    public $aspera;

    /** @var AkamaiNetstorageApi */
    public $akamaiNetstorage;

    /** @var SrtApi */
    public $srt;

    /** @var ZixiApi */
    public $zixi;

    /**
     * InputsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->rtmp = new RtmpApi(null, $this->httpWrapper);
        $this->redundantRtmp = new RedundantRtmpApi(null, $this->httpWrapper);
        $this->s3 = new S3Api(null, $this->httpWrapper);
        $this->s3RoleBased = new S3RoleBasedApi(null, $this->httpWrapper);
        $this->genericS3 = new GenericS3Api(null, $this->httpWrapper);
        $this->local = new LocalApi(null, $this->httpWrapper);
        $this->gcs = new GcsApi(null, $this->httpWrapper);
        $this->gcsServiceAccount = new GcsServiceAccountApi(null, $this->httpWrapper);
        $this->azure = new AzureApi(null, $this->httpWrapper);
        $this->ftp = new FtpApi(null, $this->httpWrapper);
        $this->sftp = new SftpApi(null, $this->httpWrapper);
        $this->http = new HttpApi(null, $this->httpWrapper);
        $this->https = new HttpsApi(null, $this->httpWrapper);
        $this->aspera = new AsperaApi(null, $this->httpWrapper);
        $this->akamaiNetstorage = new AkamaiNetstorageApi(null, $this->httpWrapper);
        $this->srt = new SrtApi(null, $this->httpWrapper);
        $this->zixi = new ZixiApi(null, $this->httpWrapper);
    }

    /**
     * Get Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\Input
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\Input
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Input::class);
    }

    /**
     * List all Inputs
     *
     * @param InputListQueryParams|null $queryParams
     * @return InputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(InputListQueryParams $queryParams = null) : InputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs', [], $queryParams, null, true);

        return ObjectMapper::map($response, InputPaginationResponse::class);
    }
}
