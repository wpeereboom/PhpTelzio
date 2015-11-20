<?php
namespace PhpTelzio;

class ResponseMapper
{

    static public function mapLogResult($rawLogResult)
    {
        $logResult = new LogResult();

        print_r($rawLogResult);
        exit;
        return $logResult;
    }
}