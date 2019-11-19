<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Invitations;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Invitation;

class InvitationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Invitation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Invitation::class);
    }
}
