<?php

namespace Onetoweb\NijhaOnline;

use Onetoweb\NijhaOnline\Endpoint\Endpoints;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;

/**
 * Nijha Online Api Client.
 */
class Client
{
    /**
     * Base Url.
     */
    public const BASE_URL = 'https://www.nijha-online.nl/api';
    public const BASE_URL_TEST = 'https://nijha.nujob.nl/api';
    
    /**
     * Methods.
     */
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    
    /**
     * @var string
     */
    private $apiKey;
    
    /**
     * @var string
     */
    private $testModus;
    
    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey, bool $testModus = false)
    {
        $this->apiKey = $apiKey;
        $this->testModus = $testModus;
        
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        if ($this->testModus) {
            return self::BASE_URL_TEST;
        } else {
            return self::BASE_URL;
        }
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * 
     * @return array|null
     */
    public function get(string $endpoint, array $query = []): ?array
    {
        return $this->request(self::METHOD_GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array|null
     */
    public function post(string $endpoint, array $data = []): ?array
    {
        return $this->request(self::METHOD_POST, $endpoint, $data);
    }
    
    /**
     * @param string $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function request(string $method, string $endpoint, array $data = [], array $query = []): ?array
    {
        $options = [
            RequestOptions::HEADERS => [
                'X-Api-Key' => $this->apiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Connection' => 'close',
            ],
            RequestOptions::QUERY => $query,
            RequestOptions::JSON => $data,
        ];
        
        $response = (new GuzzleCLient())->request($method, $this->getBaseUrl() . $endpoint, $options);
        
        $contents = $response->getBody()->getContents();
        
        $json = json_decode($contents , true);
        
        return $json;
    }
}
