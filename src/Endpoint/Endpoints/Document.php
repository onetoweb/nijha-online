<?php

namespace Onetoweb\NijhaOnline\Endpoint\Endpoints;

use Onetoweb\NijhaOnline\Endpoint\AbstractEndpoint;

/**
 * Document Endpoint.
 */
class Document extends AbstractEndpoint
{
    /**
     * @param int $folderId
     * 
     * @return array|null
     */
    public function list(int $folderId): ?array
    {
        return $this->client->get("/document/$folderId");
    }
    
    /**
     * @param int $folderId
     * @param string $filename
     * 
     * @return array|null
     */
    public function create(int $folderId, string $filename): ?array
    {
        return $this->client->post('/document/create', [
            'folder_id' => $folderId,
            'filename' => basename($filename),
            'content' => base64_encode(file_get_contents($filename))
        ]);
    }
}
