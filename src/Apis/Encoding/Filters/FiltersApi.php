<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Conform\ConformApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Watermark\WatermarkApi;
use BitmovinApiSdk\Apis\Encoding\Filters\AudioVolume\AudioVolumeApi;
use BitmovinApiSdk\Apis\Encoding\Filters\AzureSpeechToCaptions\AzureSpeechToCaptionsApi;
use BitmovinApiSdk\Apis\Encoding\Filters\EnhancedWatermark\EnhancedWatermarkApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Crop\CropApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Rotate\RotateApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Deinterlace\DeinterlaceApi;
use BitmovinApiSdk\Apis\Encoding\Filters\EnhancedDeinterlace\EnhancedDeinterlaceApi;
use BitmovinApiSdk\Apis\Encoding\Filters\AudioMix\AudioMixApi;
use BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d\DenoiseHqdn3dApi;
use BitmovinApiSdk\Apis\Encoding\Filters\EbuR128SinglePass\EbuR128SinglePassApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Text\TextApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Interlace\InterlaceApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Unsharp\UnsharpApi;
use BitmovinApiSdk\Apis\Encoding\Filters\Scale\ScaleApi;

class FiltersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var ConformApi */
    public $conform;

    /** @var WatermarkApi */
    public $watermark;

    /** @var AudioVolumeApi */
    public $audioVolume;

    /** @var AzureSpeechToCaptionsApi */
    public $azureSpeechToCaptions;

    /** @var EnhancedWatermarkApi */
    public $enhancedWatermark;

    /** @var CropApi */
    public $crop;

    /** @var RotateApi */
    public $rotate;

    /** @var DeinterlaceApi */
    public $deinterlace;

    /** @var EnhancedDeinterlaceApi */
    public $enhancedDeinterlace;

    /** @var AudioMixApi */
    public $audioMix;

    /** @var DenoiseHqdn3dApi */
    public $denoiseHqdn3d;

    /** @var EbuR128SinglePassApi */
    public $ebuR128SinglePass;

    /** @var TextApi */
    public $text;

    /** @var InterlaceApi */
    public $interlace;

    /** @var UnsharpApi */
    public $unsharp;

    /** @var ScaleApi */
    public $scale;

    /**
     * FiltersApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->conform = new ConformApi(null, $this->httpWrapper);
        $this->watermark = new WatermarkApi(null, $this->httpWrapper);
        $this->audioVolume = new AudioVolumeApi(null, $this->httpWrapper);
        $this->azureSpeechToCaptions = new AzureSpeechToCaptionsApi(null, $this->httpWrapper);
        $this->enhancedWatermark = new EnhancedWatermarkApi(null, $this->httpWrapper);
        $this->crop = new CropApi(null, $this->httpWrapper);
        $this->rotate = new RotateApi(null, $this->httpWrapper);
        $this->deinterlace = new DeinterlaceApi(null, $this->httpWrapper);
        $this->enhancedDeinterlace = new EnhancedDeinterlaceApi(null, $this->httpWrapper);
        $this->audioMix = new AudioMixApi(null, $this->httpWrapper);
        $this->denoiseHqdn3d = new DenoiseHqdn3dApi(null, $this->httpWrapper);
        $this->ebuR128SinglePass = new EbuR128SinglePassApi(null, $this->httpWrapper);
        $this->text = new TextApi(null, $this->httpWrapper);
        $this->interlace = new InterlaceApi(null, $this->httpWrapper);
        $this->unsharp = new UnsharpApi(null, $this->httpWrapper);
        $this->scale = new ScaleApi(null, $this->httpWrapper);
    }

    /**
     * Get Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\Filter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\Filter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Filter::class);
    }

    /**
     * List all Filters
     *
     * @param FilterListQueryParams|null $queryParams
     * @return FilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(FilterListQueryParams $queryParams = null) : FilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters', [], $queryParams, null, true);

        return ObjectMapper::map($response, FilterPaginationResponse::class);
    }
}
