<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $outputId;

    /** @var Output */
    public $output;

    /** @var string */
    public $outputPath;

    /** @var \BitmovinApiSdk\Models\AclEntry[] */
    public $acl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->output = ObjectMapper::map($this->output, Output::class);
        $this->acl = ObjectMapper::map($this->acl, AclEntry::class);
    }

    /**
     * ID of an existing Encoding Output owned by the organization. Set either this property or &#x60;output&#x60;, but not both.
     *
     * @param string $outputId
     * @return $this
     */
    public function outputId(string $outputId)
    {
        $this->outputId = $outputId;

        return $this;
    }

    /**
     * Inline definition of a concrete, publicly creatable Encoding Output to create synchronously. Only properties defined by the selected concrete Output type are accepted; internal types and properties are not supported. Deprecated properties that remain supported by the Encoding Output creation API are accepted. Set either this property or &#x60;outputId&#x60;, but not both. Put ACL entries on the destination-level &#x60;acl&#x60; property, not in this resource definition. The created Output is an ordinary reusable Encoding resource and is not automatically deleted with the Live Analysis or after provisioning failure.
     *
     * @param Output $output
     * @return $this
     */
    public function output(Output $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Subdirectory where files are written. This destination setting is not part of the inline Output resource definition. (required)
     *
     * @param string $outputPath
     * @return $this
     */
    public function outputPath(string $outputPath)
    {
        $this->outputPath = $outputPath;

        return $this;
    }

    /**
     * Determines accessibility of files written to this destination. Only applies to Output types that support ACLs. Defaults to PUBLIC_READ if the list is empty.
     *
     * @param \BitmovinApiSdk\Models\AclEntry[] $acl
     * @return $this
     */
    public function acl(array $acl)
    {
        $this->acl = $acl;

        return $this;
    }
}

