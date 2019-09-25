<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\CustomTags\CustomTagsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Video\VideoApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Audio\AudioApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Subtitles\SubtitlesApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Vtt\VttApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\ClosedCaptions\ClosedCaptionsApi;

class MediaApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomTagsApi */
    public $customTags;

    /** @var TypeApi */
    public $type;

    /** @var VideoApi */
    public $video;

    /** @var AudioApi */
    public $audio;

    /** @var SubtitlesApi */
    public $subtitles;

    /** @var VttApi */
    public $vtt;

    /** @var ClosedCaptionsApi */
    public $closedCaptions;

    /**
     * MediaApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customTags = new CustomTagsApi(null, $this->httpWrapper);
        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->video = new VideoApi(null, $this->httpWrapper);
        $this->audio = new AudioApi(null, $this->httpWrapper);
        $this->subtitles = new SubtitlesApi(null, $this->httpWrapper);
        $this->vtt = new VttApi(null, $this->httpWrapper);
        $this->closedCaptions = new ClosedCaptionsApi(null, $this->httpWrapper);
    }
}
