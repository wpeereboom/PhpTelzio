<?php
namespace PhpTelzio\Mapper;

use PhpTelzio\Entity\Event;

class EventMapper
{
    static public function mapEvent($rawEventData)
    {
        if(!is_array($rawEventData)) {
            $rawEventData = json_decode($rawEventData, true);
        }

        return self::mapEventData($rawEventData);
    }

    private static function mapEventData($rawEventData)
    {
        $event = new Event();

        if (isset($rawEventData['Id'])) {
            $event->setId($rawEventData['Id']);
        }
        if (isset($rawEventData['Time'])) {
            $event->setTime($rawEventData['Time']);
        }
        if (isset($rawEventData['Text'])) {
            $event->setText($rawEventData['Text']);
        }

        return $event;
    }
}