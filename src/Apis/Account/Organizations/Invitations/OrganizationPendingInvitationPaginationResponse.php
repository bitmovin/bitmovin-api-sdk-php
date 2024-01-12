<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Invitations;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\OrganizationPendingInvitation;

class OrganizationPendingInvitationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var OrganizationPendingInvitation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, OrganizationPendingInvitation::class);
    }
}
