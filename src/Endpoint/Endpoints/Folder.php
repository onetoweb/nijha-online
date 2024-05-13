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
     * 
     * @return array|null
     */
    public function listByProjectId(int $projectId): ?array
    {
        return $this->client->get("/folder/$projectId");
    }
    
    /**
     * @param int $projectId
     * @param string $folderName
     * 
     * @return array|null
     */
    public function create(int $projectId, string $folderName): ?array
    {
        return $this->client->post('/folder', [
            'project_id' => $projectId,
            'folder_name' => $folderName
        ]);
    }
    
    /**
     * @param int $folderId
     * 
     * @return array|null
     */
    public function delete(int $folderId): ?array
    {
        return $this->client->delete("/folder/$folderId");
    }
}
