<?php

namespace Onetoweb\NijhaOnline\Endpoint\Endpoints;

use Onetoweb\NijhaOnline\Endpoint\AbstractEndpoint;

/**
 * Project Endpoint.
 */
class Project extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function listByClientId(int $clientId): ?array
    {
        return $this->client->get("/project/$clientId");
    }
}
