<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Finished\FinishedApi;
use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Error\ErrorApi;
use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\TransferError\TransferErrorApi;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var FinishedApi */
    public $finished;

    /** @var ErrorApi */
    public $error;

    /** @var TransferErrorApi */
    public $transferError;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->finished = new FinishedApi(null, $this->httpWrapper);
        $this->error = new ErrorApi(null, $this->httpWrapper);
        $this->transferError = new TransferErrorApi(null, $this->httpWrapper);
    }
}
