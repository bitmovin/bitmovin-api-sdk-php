<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Schedule\ScheduleApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Scheduled\ScheduledApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Stop\StopApi;

class InsertableContentApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ScheduleApi */
    public $schedule;

    /** @var ScheduledApi */
    public $scheduled;

    /** @var StopApi */
    public $stop;

    /**
     * InsertableContentApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->schedule = new ScheduleApi(null, $this->httpWrapper);
        $this->scheduled = new ScheduledApi(null, $this->httpWrapper);
        $this->stop = new StopApi(null, $this->httpWrapper);
    }

    /**
     * Make Insertable Content Available For A Live Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\InsertableContent $insertableContent
     * @return \BitmovinApiSdk\Models\InsertableContent
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\InsertableContent $insertableContent) : \BitmovinApiSdk\Models\InsertableContent
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/insertable-content', $pathParams,  null, $insertableContent, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\InsertableContent::class);
    }

    /**
     * List All Insertable Content Available For A Live Encoding
     *
     * @param string $encodingId
     * @param InsertableContentListQueryParams|null $queryParams
     * @return InsertableContentPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, InsertableContentListQueryParams $queryParams = null) : InsertableContentPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/live/insertable-content', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, InsertableContentPaginationResponse::class);
    }
}
