<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CheckOutputPermissionsRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $path;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The path on the storage for which permissions should be checked. In AWS S3 terminology, this corresponds to a \&quot;prefix\&quot;. To perform the check, an empty test file (WritePermissionTestFile.txt) will be created in this location. Defaults to an empty string, which corresponds to the root directory.
     *
     * @param string $path
     * @return $this
     */
    public function path(string $path)
    {
        $this->path = $path;

        return $this;
    }
}

