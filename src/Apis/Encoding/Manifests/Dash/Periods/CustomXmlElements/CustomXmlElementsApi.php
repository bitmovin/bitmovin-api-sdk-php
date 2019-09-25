<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\CustomXmlElements;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class CustomXmlElementsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CustomXmlElementsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Custom XML Element to Period
     *
     * @param string $manifestId
     * @param string $periodId
     * @param \BitmovinApiSdk\Models\CustomXmlElement $customXmlElement
     * @return \BitmovinApiSdk\Models\CustomXmlElement
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, \BitmovinApiSdk\Models\CustomXmlElement $customXmlElement) : \BitmovinApiSdk\Models\CustomXmlElement
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/custom-xml-elements', $pathParams,  null, $customXmlElement, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomXmlElement::class);
    }

    /**
     * Delete Custom XML Element
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $customXmlElementId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $periodId, string $customXmlElementId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'custom_xml_element_id' => $customXmlElementId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/custom-xml-elements/{custom_xml_element_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Custom XML Element Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $customXmlElementId
     * @return \BitmovinApiSdk\Models\CustomXmlElement
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $customXmlElementId) : \BitmovinApiSdk\Models\CustomXmlElement
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'custom_xml_element_id' => $customXmlElementId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/custom-xml-elements/{custom_xml_element_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomXmlElement::class);
    }

    /**
     * List all Custom XML Elements of Period
     *
     * @param string $manifestId
     * @param string $periodId
     * @param CustomXmlElementListQueryParams|null $queryParams
     * @return CustomXmlElementPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, CustomXmlElementListQueryParams $queryParams = null) : CustomXmlElementPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/custom-xml-elements', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, CustomXmlElementPaginationResponse::class);
    }
}
