<?php

namespace Onetoweb\NijhaOnline\Endpoint\Endpoints;

use Onetoweb\NijhaOnline\Endpoint\AbstractEndpoint;

/**
 * Client Endpoint.
 */
class Client extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get('/client');
    }
    
    /**
     * @param string $clientName
     * 
     * @return array|null
     */
    public function create(string $clientName): ?array
    {
        return $this->client->post('/client', [
            'name' => $clientName
        ]);
    }
    
    /**
     * @param int $clientId
     * 
     * @return array|null
     */
    public function delete(int $clientId): ?array
    {
        return $this->client->delete("/client/$clientId");
    }
}
