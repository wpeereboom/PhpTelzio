<?php
namespace PhpTelzio;

use GuzzleHttp\Client;

class TelzioClient
{
    const TELZIO_ENDPOINT = 'http://api.telzio.com';
    const TELZIO_LOG_PATH = '/calls/log';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $this->client = new Client(['base_uri' => self::TELZIO_ENDPOINT, 'timeout'  => 5]);
    }


    public function getLiveCalls()
    {
        $path = '/calls/live';
    }

    public function getLog($number = null, $offset = null)
    {
        $response = $this->client->get(self::TELZIO_LOG_PATH, ['auth' => [$this->username, $this->password]]);

        return ResponseMapper::mapLogResult($response->getBody()->getContents());
    }

    public function getCallDetails($callUUId)
    {
        $path = '/calls/details/' . $callUUId;
    }
}