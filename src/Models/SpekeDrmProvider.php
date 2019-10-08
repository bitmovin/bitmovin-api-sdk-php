<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SpekeDrmProvider extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $url;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var string */
    public $roleArn;

    /** @var string */
    public $externalId;

    /** @var string */
    public $gatewayRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * URL of the endpoint (required)
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
     * Your username for Basic Authentication
     *
     * @param string $username
     * @return $this
     */
    public function username(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Your password for Basic Authentication
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * AWS role that will be assumed for the key exchange in case the provider runs on AWS.  During the key exchange the role will be assumed to be able to access the key provider.  This role has to be created by the owner of the account with the SPEKE server. For Bitmovin to be able to assume this role, the following has to be added to the trust policy of the role:  &#x60;&#x60;&#x60; {   \&quot;Effect\&quot;: \&quot;Allow\&quot;,   \&quot;Principal\&quot;: {     \&quot;AWS\&quot;: \&quot;arn:aws:iam::630681592166:user/bitmovinCustomerSpekeAccess\&quot;   },   \&quot;Action\&quot;: \&quot;sts:AssumeRole\&quot;,   \&quot;Condition\&quot;: {     \&quot;StringEquals\&quot;: {       \&quot;sts:ExternalId\&quot;: \&quot;{{externalId}}\&quot;     }   } } &#x60;&#x60;&#x60; It is recommended to also set the {{externalId}} due to security reasons but it can also be ommitted.  Additionally the role needs a policy similar to the following to be able to invoke the API gateway: &#x60;&#x60;&#x60; {   \&quot;Version\&quot;: \&quot;2012-10-17\&quot;,   \&quot;Statement\&quot;: [     {       \&quot;Effect\&quot;: \&quot;Allow\&quot;,       \&quot;Action\&quot;: [         \&quot;execute-api:Invoke\&quot;       ],       \&quot;Resource\&quot;: [         \&quot;arn:aws:execute-api:{{region}}:*:*_/_*_/POST/_*\&quot;       ]     }   ] } &#x60;&#x60;&#x60; where &#x60;{{region}}&#x60; is the region of the API gateway (for example &#x60;us-west-2&#x60;), the same has to be set in the property &#39;gatewayRegion&#39;. It&#39;s also possible to set &#x60;{{region}&#x60; to &#x60;*&#x60; to give the role access to all regions.
     *
     * @param string $roleArn
     * @return $this
     */
    public function roleArn(string $roleArn)
    {
        $this->roleArn = $roleArn;

        return $this;
    }

    /**
     * External ID used together with the IAM role identified by &#x60;roleArn&#x60; to assume access to the SPEKE server on AWS.
     *
     * @param string $externalId
     * @return $this
     */
    public function externalId(string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Describes the region of the AWS API Gateway that is used to access the SPEKE server. This property is mandatory when setting &#39;roleArn&#39; and has to indicate in which region the AWS API Gateway is setup. This usually corresponds to the &#x60;{{region}}&#x60; one sets in the execute-api policy for the role as described in &#39;roleArn&#39;.
     *
     * @param string $gatewayRegion
     * @return $this
     */
    public function gatewayRegion(string $gatewayRegion)
    {
        $this->gatewayRegion = $gatewayRegion;

        return $this;
    }
}

