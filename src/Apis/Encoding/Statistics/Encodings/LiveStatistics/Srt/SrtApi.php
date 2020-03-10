<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SrtApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SrtApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Stream Infos of Live Statistics from an Encoding
     *
     * @param string $encodingId
     * @param SrtStatisticsListQueryParams|null $queryParams
     * @return SrtStatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, SrtStatisticsListQueryParams $queryParams = null) : SrtStatisticsPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/{encoding_id}/live-statistics/srt', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SrtStatisticsPaginationResponse::class);
    }

    /**
     * List Statistics For SRT Live Stream Input
     *
     * @param string $encodingId
     * @param string $srtInputId
     * @param SrtStatisticsListBySrtInputIdQueryParams|null $queryParams
     * @return SrtStatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function listBySrtInputId(string $encodingId, string $srtInputId, SrtStatisticsListBySrtInputIdQueryParams $queryParams = null) : SrtStatisticsPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'srt_input_id' => $srtInputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/{encoding_id}/live-statistics/srt/{srt_input_id}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SrtStatisticsPaginationResponse::class);
    }
}
