<?php

namespace BitmovinApiSdk\Apis\Encoding\WatchFolders;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class WatchFoldersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * WatchFoldersApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Watch Folder
     *
     * @param \BitmovinApiSdk\Models\WatchFolder $watchFolder
     * @return \BitmovinApiSdk\Models\WatchFolder
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\WatchFolder $watchFolder) : \BitmovinApiSdk\Models\WatchFolder
    {
        $response = $this->httpWrapper->request('POST', '/encoding/watch-folders', [],  null, $watchFolder, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WatchFolder::class);
    }

    /**
     * Delete Watch Folder
     *
     * @param string $watchFolderId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $watchFolderId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'watch_folder_id' => $watchFolderId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/watch-folders/{watch_folder_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Watch Folder details
     *
     * @param string $watchFolderId
     * @return \BitmovinApiSdk\Models\WatchFolder
     * @throws BitmovinApiException
     */
    public function get(string $watchFolderId) : \BitmovinApiSdk\Models\WatchFolder
    {
        $pathParams = [
            'watch_folder_id' => $watchFolderId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/watch-folders/{watch_folder_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WatchFolder::class);
    }

    /**
     * List all Watch Folders
     *
     * @param WatchFolderListQueryParams|null $queryParams
     * @return WatchFolderPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WatchFolderListQueryParams $queryParams = null) : WatchFolderPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/watch-folders', [], $queryParams, null, true);

        return ObjectMapper::map($response, WatchFolderPaginationResponse::class);
    }

    /**
     * Start Watch Folder
     *
     * @param string $watchFolderId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $watchFolderId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'watch_folder_id' => $watchFolderId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/watch-folders/{watch_folder_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Stop Watch Folder
     *
     * @param string $watchFolderId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function stop(string $watchFolderId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'watch_folder_id' => $watchFolderId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/watch-folders/{watch_folder_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
