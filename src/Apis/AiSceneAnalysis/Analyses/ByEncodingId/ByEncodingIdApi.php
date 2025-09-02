<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Details\DetailsApi;
use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Languages\LanguagesApi;
use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\AdPlacements\AdPlacementsApi;

class ByEncodingIdApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DetailsApi */
    public $details;

    /** @var LanguagesApi */
    public $languages;

    /** @var AdPlacementsApi */
    public $adPlacements;

    /**
     * ByEncodingIdApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->details = new DetailsApi(null, $this->httpWrapper);
        $this->languages = new LanguagesApi(null, $this->httpWrapper);
        $this->adPlacements = new AdPlacementsApi(null, $this->httpWrapper);
    }
}
