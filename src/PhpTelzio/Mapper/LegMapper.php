<?php
namespace PhpTelzio\Mapper;

use PhpTelzio\Entity\Leg;

class LegMapper
{
    static public function mapLeg($rawLegData)
    {
        if(!is_array($rawLegData)) {
            $rawLegData = json_decode($rawLegData, true);
        }

        return self::mapLegData($rawLegData);
    }

    private static function mapLegData($rawLegData)
    {
        $leg = new Leg();

        if (isset($rawLegData['CallUUID'])) {
            $leg->setCallUUID($rawLegData['CallUUID']);
        }
        if (isset($rawLegData['BilledDuration'])) {
            $leg->setBilledDuration($rawLegData['BilledDuration']);
        }
        if (isset($rawLegData['Duration'])) {
            $leg->setDuration($rawLegData['Duration']);
        }
        if (isset($rawLegData['HangupCause'])) {
            $leg->setHangupCause($rawLegData['HangupCause']);
        }
        if (isset($rawLegData['Started'])) {
            $leg->setStarted($rawLegData['Started']);
        }
        if (isset($rawLegData['Status'])) {
            $leg->setStatus($rawLegData['Status']);
        }
        if (isset($rawLegData['To'])) {
            $leg->setTo($rawLegData['To']);
        }
        if (isset($rawLegData['ToUser'])) {
            $leg->setTo($rawLegData['ToUser']);
        }
        if (isset($rawLegData['FromUser'])) {
            $leg->setTo($rawLegData['FromUser']);
        }
        if (isset($rawLegData['From'])) {
            $leg->setTo($rawLegData['From']);
        }
        if (isset($rawLegData['FreeMinutes'])) {
            $leg->setFreeMinutes($rawLegData['FreeMinutes']);
        }
        if (isset($rawLegData['Price'])) {
            $leg->setPrice($rawLegData['Price']);
        }
        if (isset($rawLegData['Rate'])) {
            $leg->setRate($rawLegData['Rate']);
        }

        return $leg;
    }
}