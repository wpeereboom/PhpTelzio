<?php


use PhpTelzio\Entity\Event;
use PhpTelzio\Mapper\EventMapper;

class EventMapperTest extends PHPUnit_Framework_TestCase
{
    public function testMapEvent()
    {
        $expectedEvent = new Event();
        $expectedEvent->setId(1);
        $expectedEvent->setText('Hello world');
        $expectedEvent->setTime('12');

        $rawData = json_encode(['Id' => '1', 'Text' => 'Hello world', 'Time' => '12']);

        $leg = EventMapper::mapEvent($rawData);

        $this->assertEquals($expectedEvent, $leg);
    }
}
