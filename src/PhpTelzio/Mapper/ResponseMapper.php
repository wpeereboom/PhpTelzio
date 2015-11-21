<?php
namespace PhpTelzio\Mapper;

use PhpTelzio\LogResult;

class ResponseMapper
{

    /**
     * @param string $rawLogResult
     * @return LogResult
     */
    static public function mapLogResult($rawLogResult)
    {
        $log = json_decode($rawLogResult, true);

        $logResult = self::setLogMetaData(new LogResult(), $log['Count'], $log['Offset'], $log['TotalCount']);

        foreach ($log['Calls'] as $callData) {
            $call = CallMapper::mapCall($callData);
            $logResult->addCall($call);
        }

        return $logResult;
    }

    /**
     * @param string $rawLiveCallResult
     * @return LogResult
     */
    static public function mapLiveCallResult($rawLiveCallResult)
    {
        $log = json_decode($rawLiveCallResult, true);

        $callCount = count($log['LiveCalls']);
        $logResult = self::setLogMetaData(new LogResult(), $callCount, 0, $callCount);

        foreach ($log['LiveCalls'] as $callData) {
            $call = CallMapper::mapCall($callData);
            $logResult->addCall($call);
        }

        return $logResult;
    }

    static protected function setLogMetaData(LogResult $logResult, $callCount, $offset, $totalCount)
    {
        $logResult->setOffset($offset);
        $logResult->setCount($callCount);
        $logResult->setTotalCount($totalCount);

        return $logResult;
    }
}