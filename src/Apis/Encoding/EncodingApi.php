<?php

namespace BitmovinApiSdk\Apis\Encoding;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\EncodingsApi;
use BitmovinApiSdk\Apis\Encoding\Inputs\InputsApi;
use BitmovinApiSdk\Apis\Encoding\Outputs\OutputsApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\ConfigurationsApi;
use BitmovinApiSdk\Apis\Encoding\Filters\FiltersApi;
use BitmovinApiSdk\Apis\Encoding\Live\LiveApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\ManifestsApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\InfrastructureApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\StatisticsApi;
use BitmovinApiSdk\Apis\Encoding\WatchFolders\WatchFoldersApi;
use BitmovinApiSdk\Apis\Encoding\ErrorDefinitions\ErrorDefinitionsApi;
use BitmovinApiSdk\Apis\Encoding\Templates\TemplatesApi;

class EncodingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingsApi */
    public $encodings;

    /** @var InputsApi */
    public $inputs;

    /** @var OutputsApi */
    public $outputs;

    /** @var ConfigurationsApi */
    public $configurations;

    /** @var FiltersApi */
    public $filters;

    /** @var LiveApi */
    public $live;

    /** @var ManifestsApi */
    public $manifests;

    /** @var InfrastructureApi */
    public $infrastructure;

    /** @var StatisticsApi */
    public $statistics;

    /** @var WatchFoldersApi */
    public $watchFolders;

    /** @var ErrorDefinitionsApi */
    public $errorDefinitions;

    /** @var TemplatesApi */
    public $templates;

    /**
     * EncodingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
        $this->inputs = new InputsApi(null, $this->httpWrapper);
        $this->outputs = new OutputsApi(null, $this->httpWrapper);
        $this->configurations = new ConfigurationsApi(null, $this->httpWrapper);
        $this->filters = new FiltersApi(null, $this->httpWrapper);
        $this->live = new LiveApi(null, $this->httpWrapper);
        $this->manifests = new ManifestsApi(null, $this->httpWrapper);
        $this->infrastructure = new InfrastructureApi(null, $this->httpWrapper);
        $this->statistics = new StatisticsApi(null, $this->httpWrapper);
        $this->watchFolders = new WatchFoldersApi(null, $this->httpWrapper);
        $this->errorDefinitions = new ErrorDefinitionsApi(null, $this->httpWrapper);
        $this->templates = new TemplatesApi(null, $this->httpWrapper);
    }
}
