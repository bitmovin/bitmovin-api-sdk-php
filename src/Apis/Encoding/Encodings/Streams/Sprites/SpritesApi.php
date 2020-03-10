<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Sprites;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Sprites\Customdata\CustomdataApi;

class SpritesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SpritesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Add Sprite
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\Sprite $sprite
     * @return \BitmovinApiSdk\Models\Sprite
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\Sprite $sprite) : \BitmovinApiSdk\Models\Sprite
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/sprites', $pathParams,  null, $sprite, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Sprite::class);
    }

    /**
     * Delete Sprite
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $spriteId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $spriteId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'sprite_id' => $spriteId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/sprites/{sprite_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Sprite Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $spriteId
     * @return \BitmovinApiSdk\Models\Sprite
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $spriteId) : \BitmovinApiSdk\Models\Sprite
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'sprite_id' => $spriteId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/sprites/{sprite_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Sprite::class);
    }

    /**
     * List Sprites
     *
     * @param string $encodingId
     * @param string $streamId
     * @param SpriteListQueryParams|null $queryParams
     * @return SpritePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, SpriteListQueryParams $queryParams = null) : SpritePaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/sprites', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SpritePaginationResponse::class);
    }
}
