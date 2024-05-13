<?php

namespace Onetoweb\NijhaOnline\Endpoint\Endpoints;

use Onetoweb\NijhaOnline\Endpoint\AbstractEndpoint;
use DateTime;

/**
 * Project Endpoint.
 */
class Project extends AbstractEndpoint
{
    /**
     * @param int $clientId
     * 
     * @return array|null
     */
    public function listByClientId(int $clientId): ?array
    {
        return $this->client->get("/project/$clientId");
    }
    
    /**
     * @param int $clientId
     * @param string $name
     * @param string $number = null
     * @param DateTime $expires = null
     * 
     * @return array|null
     */
    public function create(int $clientId, string $name, string $number = null, DateTime $expires = null): ?array
    {
        return $this->client->post("/project", [
            'client_id' => $clientId,
            'name' => $name,
            'number' => $number,
            'expires' => $expires !== null ? $expires->format(DateTime::ATOM) : null,
        ]);
    }
    
    /**
     * @param int $projectId
     * 
     * @return array|null
     */
    public function delete(int $projectId): ?array
    {
        return $this->client->delete("/project/$projectId");
    }
}
