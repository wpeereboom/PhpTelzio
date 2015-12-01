<?php
namespace PhpTelzio\Mapper;


class AccountMapper
{
    static public function mapAccount($rawAccountData)
    {
        if(!is_array($rawAccountData)) {
            $rawAccountData = json_decode($rawAccountData, true);
        }

        return self::mapAccountData($rawAccountData);
    }

    private static function mapAccountData($rawAccountData)
    {

        print_r($rawAccountData); exit;

//        $leg = new Leg();
//
//        if (isset($rawLegData['CallUUID'])) {
//            $leg->setCallUUID($rawLegData['CallUUID']);
//        }
//        if (isset($rawLegData['BilledDuration'])) {
//            $leg->setBilledDuration($rawLegData['BilledDuration']);
//        }
//        if (isset($rawLegData['Duration'])) {
//            $leg->setDuration($rawLegData['Duration']);
//        }
//        if (isset($rawLegData['HangupCause'])) {
//            $leg->setHangupCause($rawLegData['HangupCause']);
//        }
//        if (isset($rawLegData['Started'])) {
//            $leg->setStarted($rawLegData['Started']);
//        }
//        if (isset($rawLegData['Status'])) {
//            $leg->setStatus($rawLegData['Status']);
//        }
//        if (isset($rawLegData['To'])) {
//            $leg->setTo($rawLegData['To']);
//        }
//        if (isset($rawLegData['FreeMinutes'])) {
//            $leg->setFreeMinutes($rawLegData['FreeMinutes']);
//        }
//        if (isset($rawLegData['Price'])) {
//            $leg->setPrice($rawLegData['Price']);
//        }
//        if (isset($rawLegData['Rate'])) {
//            $leg->setRate($rawLegData['Rate']);
//        }

//        return $leg;
    }
}