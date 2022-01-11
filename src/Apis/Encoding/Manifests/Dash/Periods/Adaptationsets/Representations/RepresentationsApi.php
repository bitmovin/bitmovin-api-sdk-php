<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Vtt\VttApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Imsc\ImscApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Sprite\SpriteApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Fmp4Api;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ChunkedText\ChunkedTextApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf\CmafApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Mp4\Mp4Api;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Webm\WebmApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ProgressiveWebm\ProgressiveWebmApi;

class RepresentationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var VttApi */
    public $vtt;

    /** @var ImscApi */
    public $imsc;

    /** @var SpriteApi */
    public $sprite;

    /** @var Fmp4Api */
    public $fmp4;

    /** @var ChunkedTextApi */
    public $chunkedText;

    /** @var CmafApi */
    public $cmaf;

    /** @var Mp4Api */
    public $mp4;

    /** @var WebmApi */
    public $webm;

    /** @var ProgressiveWebmApi */
    public $progressiveWebm;

    /**
     * RepresentationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->vtt = new VttApi(null, $this->httpWrapper);
        $this->imsc = new ImscApi(null, $this->httpWrapper);
        $this->sprite = new SpriteApi(null, $this->httpWrapper);
        $this->fmp4 = new Fmp4Api(null, $this->httpWrapper);
        $this->chunkedText = new ChunkedTextApi(null, $this->httpWrapper);
        $this->cmaf = new CmafApi(null, $this->httpWrapper);
        $this->mp4 = new Mp4Api(null, $this->httpWrapper);
        $this->webm = new WebmApi(null, $this->httpWrapper);
        $this->progressiveWebm = new ProgressiveWebmApi(null, $this->httpWrapper);
    }

    /**
     * List all DASH Representations
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param DashRepresentationListQueryParams|null $queryParams
     * @return DashRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, DashRepresentationListQueryParams $queryParams = null) : DashRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DashRepresentationPaginationResponse::class);
    }
}
