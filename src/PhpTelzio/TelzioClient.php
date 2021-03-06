<?php
namespace PhpTelzio;

use GuzzleHttp\Client;
use PhpTelzio\Entity\Call;
use PhpTelzio\Mapper\AccountMapper;
use PhpTelzio\Mapper\CallMapper;
use PhpTelzio\Mapper\ResponseMapper;

class TelzioClient
{
    const TELZIO_ENDPOINT = 'http://api.telzio.com';
    const TELZIO_LOG_PATH = '/calls/log';
    const TELZIO_LIVE_CALL_PATH = '/calls/live';
    const TELZIO_CALL_DETAILS_PATH = '/calls/details/';
    const TELZIO_ACCOUNT_BALANCE = '/account/balance';

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

    /**
     * Initiate Telzio client
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get the active calls
     *
     * @return LogResult
     */
    public function getLiveCalls()
    {
        $response = $this->getHttpClient()->get(self::TELZIO_LIVE_CALL_PATH, ['auth' => [$this->username, $this->password]]);

        return ResponseMapper::mapLiveCallResult($response->getBody()->getContents());
    }

    /**
     * Get the call log, optional for a specific number and offset
     *
     * @param string $number
     * @param int $offset
     * @return LogResult
     */
    public function getLog($number = null, $offset = 0)
    {
        $pathArgs = ['Offset' => $offset];
        if(!is_null($number)) {
            $number = str_replace([' ','+','.','-'], '', $number);
            $pathArgs['Number'] = $number;
        }

        $path = self::TELZIO_LOG_PATH . '?' . http_build_query($pathArgs);
        $response = $this->getHttpClient()->get($path, ['auth' => [$this->username, $this->password]]);

        return ResponseMapper::mapLogResult($response->getBody()->getContents());
    }

    /**
     * Get the details of a given call uuid
     * @param string $callUUId
     * @return Call
     */
    public function getCallDetails($callUUId)
    {
        $response = $this->getHttpClient()->get(
            self::TELZIO_CALL_DETAILS_PATH . $callUUId,
            ['auth' => [$this->username, $this->password]]
        );

        return CallMapper::mapCall($response->getBody()->getContents());
    }

    /**
     * @return Entity\Leg
     */
    public function getAccount()
    {
        $response = $this->getHttpClient()->get(
            self::TELZIO_ACCOUNT_BALANCE,
            ['auth' => [$this->username, $this->password]]
        );

        return AccountMapper::mapAccount($response->getBody()->getContents());
    }

    /**
     * @return Client
     */
    protected function getHttpClient()
    {
        return new Client(['base_uri' => self::TELZIO_ENDPOINT, 'timeout' => 5]);
    }
}