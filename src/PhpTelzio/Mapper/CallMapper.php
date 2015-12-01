<?php
namespace PhpTelzio\Mapper;

use PhpTelzio\Entity\Call;

class CallMapper
{

    /**
     * @param string|array $rawCallData
     * @return Call
     */
    static public function mapCall($rawCallData)
    {
        if(!is_array($rawCallData)) {
            $rawCallData = json_decode($rawCallData, true);
        }

        return self::mapCallData($rawCallData);
    }

    static protected function mapCallData($callData)
    {
        $call = new Call();

        if (isset($callData['CallUUID'])) {
            $call->setCallUUID($callData['CallUUID']);
        }
        if (isset($callData['BilledDuration'])) {
            $call->setBilledDuration($callData['BilledDuration']);
        }
        if (isset($callData['Direction'])) {
            $call->setDirection($callData['Direction']);
        }
        if (isset($callData['Duration'])) {
            $call->setDuration($callData['Duration']);
        }
        if (isset($callData['From'])) {
            $call->setFrom($callData['From']);
        }
        if (isset($callData['HangupCause'])) {
            $call->setHangupCause($callData['HangupCause']);
        }
        if (isset($callData['Started'])) {
            $call->setStarted($callData['Started']);
        }
        if (isset($callData['Status'])) {
            $call->setStatus($callData['Status']);
        }
        if (isset($callData['To'])) {
            $call->setTo($callData['To']);
        }
        if (isset($callData['TotalFreeMinutes'])) {
            $call->setTotalFreeMinutes($callData['TotalFreeMinutes']);
        }
        if (isset($callData['TotalPrice'])) {
            $call->setTotalPrice($callData['TotalPrice']);
        }
        if(isset($callData['Legs'])) {
            foreach($callData['Legs'] as $legData) {
                $call->addLeg(LegMapper::mapLeg($legData));
            }
        }
        if(isset($callData['Events'])) {
            foreach($callData['Events'] as $eventData) {
                $call->addEvent(EventMapper::mapEvent($eventData));
            }
        }

        return $call;
    }
}