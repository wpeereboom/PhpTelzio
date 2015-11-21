<?php
namespace PhpTelzio;

use PhpTelzio\Entity\Call;

class ResponseMapper
{

    static public function mapLogResult($rawLogResult)
    {
        $log = json_decode($rawLogResult, true);

        $logResult = new LogResult();
        $logResult->setCount($log['Count']);
        $logResult->setOffset($log['Offset']);
        $logResult->setTotalCount($log['TotalCount']);

        foreach($log['Calls'] as $callLog) {
            $call = new Call();

            $call->setCallUUID($callLog['CallUUID']);
            $call->setBilledDuration($callLog['BilledDuration']);
            $call->setDirection($callLog['Direction']);
            $call->setDuration($callLog['Duration']);
            $call->setFrom($callLog['From']);
            $call->setHangupCause($callLog['HangupCause']);
            $call->setStarted($callLog['Started']);
            $call->setStatus($callLog['Status']);
            $call->setTo($callLog['To']);

            $logResult->addCall($call);
        }

        return $logResult;
    }
}