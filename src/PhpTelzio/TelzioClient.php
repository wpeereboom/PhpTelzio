<?php
namespace PhpTelzio;

use GuzzleHttp\Client;

class TelzioClient
{
    const TELZIO_ENDPOINT = 'http://api.telzio.com';

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


        // Get the result
        $response = '';





    }

    public function getLog($number = null, $offset = null)
    {
        $path = '/calls/log';

        $response = $this->client->get($path, ['auth' => [$this->username, $this->password]]);

        print_r($response->getBody()); exit;
        $result = ResponseMapper::mapLogResult($response);
    }

    public function getCallDetails($callUUId)
    {
        $path = '/calls/details/' . $callUUId;
    }
}