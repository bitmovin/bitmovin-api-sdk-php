<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc\Psnr\PsnrApi;

class QcApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var PsnrApi */
    public $psnr;

    /**
     * QcApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->psnr = new PsnrApi(null, $this->httpWrapper);
    }
}
