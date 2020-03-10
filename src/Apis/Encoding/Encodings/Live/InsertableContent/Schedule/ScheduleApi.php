<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Schedule;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ScheduleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ScheduleApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Schedule Insertable Content For a Live Encoding
     *
     * @param string $encodingId
     * @param string $contentId
     * @param \BitmovinApiSdk\Models\ScheduledInsertableContent $scheduledInsertableContent
     * @return \BitmovinApiSdk\Models\ScheduledInsertableContent
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $contentId, \BitmovinApiSdk\Models\ScheduledInsertableContent $scheduledInsertableContent) : \BitmovinApiSdk\Models\ScheduledInsertableContent
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'content_id' => $contentId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/insertable-content/{content_id}/schedule', $pathParams,  null, $scheduledInsertableContent, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ScheduledInsertableContent::class);
    }

    /**
     * Deschedule Insertable Content
     *
     * @param string $encodingId
     * @param string $contentId
     * @param string $scheduledContentId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $contentId, string $scheduledContentId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'content_id' => $contentId,
            'scheduled_content_id' => $scheduledContentId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/live/insertable-content/{content_id}/schedule/{scheduled_content_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
