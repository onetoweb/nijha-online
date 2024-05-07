<?php

namespace Onetoweb\NijhaOnline\Endpoint\Endpoints;

use Onetoweb\NijhaOnline\Endpoint\AbstractEndpoint;

/**
 * Folder Endpoint.
 */
class Folder extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get('/folder');
    }
    
    /**
     * @param int $projectId
     * @param string $folderName
     * 
     * @return array|null
     */
    public function create(int $projectId, string $folderName): ?array
    {
        return $this->client->post('/folder/create', [
            'project_id' => $projectId,
            'folder_name' => $folderName
        ]);
    }
}
