<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobUrlOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $url;

    /** @var SimpleEncodingVodJobCredentials */
    public $credentials;

    /** @var bool */
    public $makePublic;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->credentials = ObjectMapper::map($this->credentials, SimpleEncodingVodJobCredentials::class);
    }

    /**
     * Define a URL pointing to a folder which will be used to upload the encoded assets.  The output folder structure used looks the following way: &lt;br&gt;&lt;br&gt; &#x60;http://host/my-folder&#x60;     &lt;ul&gt;       &lt;li&gt;         &#x60;/video&#x60;         &lt;ul&gt;           &lt;li&gt;&#x60;/h264/{width}x{height}_{bitrate}/&#x60; (multiple subfolders containing different output renditions)&lt;/li&gt;         &lt;/ul&gt;       &lt;/li&gt;       &lt;li&gt;&#x60;/audio&#x60;         &lt;ul&gt;           &lt;li&gt;&#x60;/aac/{language}/&#x60; - if language is unique (subfolder containing audio output files)&lt;/li&gt;           &lt;li&gt;&#x60;/aac/{language}_{index}/&#x60; - if language is not unique (subfolder containing audio output files)&lt;/li&gt;         &lt;/ul&gt;       &lt;/li&gt;       &lt;li&gt;&#x60;/subtitles&#x60; (subfolder containing subtitles files)&lt;/li&gt;       &lt;li&gt;&#x60;/captions&#x60; (subfolder containing subtitles files)&lt;/li&gt;       &lt;li&gt;&#x60;/sprites&#x60; (subfolder containing generated sprites)&lt;/li&gt;       &lt;li&gt;&#x60;/thumbnails&#x60; (subfolder containing generated thumbnails)&lt;/li&gt;       &lt;li&gt;&#x60;/index.m3u8&#x60; (HLS manifest file) &lt;/li&gt;       &lt;li&gt;&#x60;/stream.mpd&#x60; (DASH manifest file) &lt;/li&gt;     &lt;/ul&gt;  Currently the following protocols/storages systems are supported: S3, GCS, Azure Blob Storage, Akamai NetStorage. Note that most protocols will require &#x60;credentials&#x60; to access the asset. Check the description below which ones are applicable. See below how to construct the URLs for the individual protocals/storage systems.  ---  **S3**: * &#x60;s3://&lt;my-bucket&gt;/path/&#x60;  Authentication can be done via accesskey/secretkey or role-based authentication. Generic S3 is currently NOT supported.  **GCS**: * &#x60;gcs://&lt;my-bucket&gt;/path/&#x60;  Authentication can be done via accesskey/secretkey or a service account  **Azure Blob Storage (ABS)**: * &#x60;https://&lt;account&gt;.blob.core.windows.net/&lt;container&gt;/path/&#x60;  It is required to provide the Azure key credentials for authentication.  **Akamai NetStorage**: * &#x60;https://&lt;host&gt;-nsu.akamaihd.net/&lt;CP-code&gt;/path/&#x60;  It is required to provider username/password credentials for authentication. (required)
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Credentials to be used for authentication and accessing the folder.
     *
     * @param SimpleEncodingVodJobCredentials $credentials
     * @return $this
     */
    public function credentials(SimpleEncodingVodJobCredentials $credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * Indicates if the output should be publically available so that playback immediately works over the internet. Note that not every storage provider supports public output, in this case the flag will be ignored (e.g., Akamai NetStorage).  It might forbidden by some storage configuration to make files public, for example an S3 buckets can be configured to disallow public access. In this case set it to false.
     *
     * @param bool $makePublic
     * @return $this
     */
    public function makePublic(bool $makePublic)
    {
        $this->makePublic = $makePublic;

        return $this;
    }
}

