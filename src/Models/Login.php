<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Login extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $eMail;

    /** @var string */
    public $password;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Email address of the account. (required)
     *
     * @param string $eMail
     * @return $this
     */
    public function eMail(string $eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Password of the account. (required)
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }
}

