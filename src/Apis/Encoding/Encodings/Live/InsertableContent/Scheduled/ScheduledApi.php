<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Scheduled;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ScheduledApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ScheduledApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Scheduled Insertable Content
     *
     * @param string $encodingId
     * @param ScheduledInsertableContentListQueryParams|null $queryParams
     * @return ScheduledInsertableContentPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ScheduledInsertableContentListQueryParams $queryParams = null) : ScheduledInsertableContentPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/live/insertable-content/scheduled', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ScheduledInsertableContentPaginationResponse::class);
    }
}
