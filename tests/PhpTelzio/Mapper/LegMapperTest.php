<?php
use PhpTelzio\Entity\Leg;
use PhpTelzio\Mapper\LegMapper;

class LegMapperTest extends PHPUnit_Framework_TestCase
{

    public function testMapLeg()
    {
        $expectedLeg = new Leg();
        $expectedLeg->setBilledDuration('12:00');
        $expectedLeg->setTo('+3123423523');
        $expectedLeg->setStatus('Ready');

        $rawData = json_encode(['BilledDuration' => '12:00', 'To' => '+3123423523', 'Status' => 'Ready']);

        $leg = LegMapper::mapLeg($rawData);

        $this->assertEquals($expectedLeg, $leg);
    }
}
