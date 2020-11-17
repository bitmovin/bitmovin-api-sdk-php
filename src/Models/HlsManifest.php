<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HlsManifest extends Manifest
{
    /** @var string */
    public $manifestName;

    /** @var HlsVersion */
    public $hlsMediaPlaylistVersion;

    /** @var HlsVersion */
    public $hlsMasterPlaylistVersion;

    /** @var ChannelsAttributeForAudio */
    public $channelsAttributeForAudio;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->hlsMediaPlaylistVersion = ObjectMapper::map($this->hlsMediaPlaylistVersion, HlsVersion::class);
        $this->hlsMasterPlaylistVersion = ObjectMapper::map($this->hlsMasterPlaylistVersion, HlsVersion::class);
        $this->channelsAttributeForAudio = ObjectMapper::map($this->channelsAttributeForAudio, ChannelsAttributeForAudio::class);
    }

    /**
     * The filename of your manifest. If this is not set, the &#x60;name&#x60; is used as output file name. Either one of &#x60;name&#x60; or &#x60;manifestName&#x60; is required. Be aware that spaces will be replaced with underlines (&#x60;_&#x60;) on the output.
     *
     * @param string $manifestName
     * @return $this
     */
    public function manifestName(string $manifestName)
    {
        $this->manifestName = $manifestName;

        return $this;
    }

    /**
     * If this is set, the EXT-X-VERSION tags of the Media Playlists are set to the provided version
     *
     * @param HlsVersion $hlsMediaPlaylistVersion
     * @return $this
     */
    public function hlsMediaPlaylistVersion(HlsVersion $hlsMediaPlaylistVersion)
    {
        $this->hlsMediaPlaylistVersion = $hlsMediaPlaylistVersion;

        return $this;
    }

    /**
     * If this is set, the EXT-X-VERSION tag of the Master Playlist is set to the provided version
     *
     * @param HlsVersion $hlsMasterPlaylistVersion
     * @return $this
     */
    public function hlsMasterPlaylistVersion(HlsVersion $hlsMasterPlaylistVersion)
    {
        $this->hlsMasterPlaylistVersion = $hlsMasterPlaylistVersion;

        return $this;
    }

    /**
     * Controls the behaviour of the CHANNELS attribute for the EXT-X-VERSION tag
     *
     * @param ChannelsAttributeForAudio $channelsAttributeForAudio
     * @return $this
     */
    public function channelsAttributeForAudio(ChannelsAttributeForAudio $channelsAttributeForAudio)
    {
        $this->channelsAttributeForAudio = $channelsAttributeForAudio;

        return $this;
    }
}

