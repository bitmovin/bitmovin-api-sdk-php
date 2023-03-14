<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $outputId;

    /** @var string */
    public $outputPath;

    /** @var \BitmovinApiSdk\Models\AclEntry[] */
    public $acl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->acl = ObjectMapper::map($this->acl, AclEntry::class);
    }

    /**
     * Id of the corresponding output (required)
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
     * Subdirectory where to save the files to (required)
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
     * Determines accessibility of files written to this output. Only applies to output types that support ACLs. Defaults to PUBLIC_READ if the list is empty. The destination (e.g. cloud storage bucket) needs to allow the configured ACL
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

