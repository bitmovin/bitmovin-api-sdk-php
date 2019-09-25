<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Contentprotection;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ContentprotectionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ContentprotectionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Content Protection to Smooth Streaming
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\SmoothManifestContentProtection $smoothManifestContentProtection
     * @return \BitmovinApiSdk\Models\SmoothManifestContentProtection
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\SmoothManifestContentProtection $smoothManifestContentProtection) : \BitmovinApiSdk\Models\SmoothManifestContentProtection
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth/{manifest_id}/contentprotection', $pathParams,  null, $smoothManifestContentProtection, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothManifestContentProtection::class);
    }

    /**
     * Delete Content Protection of Smooth Streaming
     *
     * @param string $manifestId
     * @param string $protectionId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $protectionId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'protection_id' => $protectionId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/smooth/{manifest_id}/contentprotection/{protection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Content Protection of Smooth Streaming Representation Details
     *
     * @param string $manifestId
     * @param string $protectionId
     * @return \BitmovinApiSdk\Models\SmoothManifestContentProtection
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $protectionId) : \BitmovinApiSdk\Models\SmoothManifestContentProtection
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'protection_id' => $protectionId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}/contentprotection/{protection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothManifestContentProtection::class);
    }

    /**
     * List Content Protection of Smooth Streaming
     *
     * @param string $manifestId
     * @param SmoothManifestContentProtectionListQueryParams|null $queryParams
     * @return SmoothManifestContentProtectionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, SmoothManifestContentProtectionListQueryParams $queryParams = null) : SmoothManifestContentProtectionPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}/contentprotection', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SmoothManifestContentProtectionPaginationResponse::class);
    }
}
