<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Invitations;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class InvitationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return InvitationListQueryParams
     */
    public static function create(): InvitationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return InvitationListQueryParams
     */
    public function offset(int $offset): InvitationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return InvitationListQueryParams
     */
    public function limit(int $limit): InvitationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
