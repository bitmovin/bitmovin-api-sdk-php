<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamMetadata extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $language;

    /** @var string */
    public $label;

    /** @var string */
    public $labelLanguage;

    /** @var string */
    public $switchingSetId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Language of the media contained in the stream, given as an ISO 639-2 code or a BCP 47 tag, for example &#39;eng&#39; or &#39;en-US&#39;. If the value is not set, then no metadata tag is set for the media stream.
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Display name of the Stream, for example to tell apart multiple audio tracks that share the same language. For CMAF muxings it is written as a &#39;labl&#39; box (ISO/IEC 14496-12) into the user data of the track. Downstream packagers use it for the Label element in DASH manifests and the NAME attribute of EXT-X-MEDIA tags in HLS playlists. If the value is not set, no label is written. Use &#39;labelLanguage&#39; to declare which language the label itself is written in.
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Language the &#39;label&#39; itself is written in, which is not necessarily the language of the media. A Spanish audio track can carry an English label, for example. For CMAF muxings it is written into the &#39;labl&#39; box next to the label, and downstream packagers use it for the lang attribute of the Label element in DASH manifests. The value is written as given and downstream packagers expose it unchanged, so set a BCP 47 tag such as &#39;en&#39; when the manifest should carry that form. The value has to be shaped like a BCP 47 tag: a primary subtag of two or three letters, optionally followed by subtags of up to eight letters or digits, each separated by a hyphen, for example &#39;en&#39;, &#39;en-US&#39; or &#39;es-419&#39;. If the value is not set and a label is set, &#39;language&#39; is used as given, for example &#39;eng&#39;. Without either, the label language is written as &#39;und&#39; (undetermined). HLS playlists are not affected, as EXT-X-MEDIA has no equivalent attribute.
     *
     * @param string $labelLanguage
     * @return $this
     */
    public function labelLanguage(string $labelLanguage)
    {
        $this->labelLanguage = $labelLanguage;

        return $this;
    }

    /**
     * Identifier of the switching set the Stream belongs to. For CMAF muxings it is written as a &#39;kind&#39; box with schemeURI urn:dashif:ingest:switchingset_id (DASH-IF Live Media Ingest) into the user data of the track. Downstream packagers group tracks with the same identifier into one switching set and use it in segment URLs. Only letters, digits, hyphens and underscores are allowed. If the value is not set and a label is set, an identifier is derived from the properties of the Stream, including the label. Without a label, no identifier is written. Set it explicitly when segment URLs have to stay stable across configuration updates.
     *
     * @param string $switchingSetId
     * @return $this
     */
    public function switchingSetId(string $switchingSetId)
    {
        $this->switchingSetId = $switchingSetId;

        return $this;
    }
}

