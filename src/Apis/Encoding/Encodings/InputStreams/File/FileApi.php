<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\File;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class FileApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * FileApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add File input stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\FileInputStream $fileInputStream
     * @return \BitmovinApiSdk\Models\FileInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\FileInputStream $fileInputStream) : \BitmovinApiSdk\Models\FileInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/file', $pathParams,  null, $fileInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FileInputStream::class);
    }

    /**
     * Delete File stream
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/file/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * File input stream details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\FileInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\FileInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/file/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FileInputStream::class);
    }

    /**
     * List File input stream
     *
     * @param string $encodingId
     * @param FileInputStreamListQueryParams|null $queryParams
     * @return FileInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, FileInputStreamListQueryParams $queryParams = null) : FileInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/file', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, FileInputStreamPaginationResponse::class);
    }
}
