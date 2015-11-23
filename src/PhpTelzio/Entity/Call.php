<?php
namespace PhpTelzio\Entity;

class Call
{
    /**
     * @var string
     */
    protected $callUUID;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $direction;

    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var string
     */
    protected $hangupCause;

    /**
     * @var string
     */
    protected $started;

    /**
     * @var string
     */
    protected $duration;

    /**
     * @var string
     */
    protected $billedDuration;

    /**
     * @var string
     */
    protected $totalFreeMinutes;

    /**
     * @var string
     */
    protected $totalPrice;

    /**
     * @var Leg[]
     */
    protected $legs = [];

    /**
     * @var Event[]
     */
    protected $events = [];

    /**
     * @return string
     */
    public function getCallUUID()
    {
        return $this->callUUID;
    }

    /**
     * @param string $callUUID
     */
    public function setCallUUID($callUUID)
    {
        $this->callUUID = $callUUID;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getHangupCause()
    {
        return $this->hangupCause;
    }

    /**
     * @param string $hangupCause
     */
    public function setHangupCause($hangupCause)
    {
        $this->hangupCause = $hangupCause;
    }

    /**
     * @return string
     */
    public function getStarted()
    {
        return$this->started;
    }

    /**
     * @param string $started
     */
    public function setStarted($started)
    {
        $this->started = $started;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getBilledDuration()
    {
        return $this->billedDuration;
    }

    /**
     * @param string $billedDuration
     */
    public function setBilledDuration($billedDuration)
    {
        $this->billedDuration = $billedDuration;
    }

    /**
     * @return string
     */
    public function getTotalFreeMinutes()
    {
        return $this->totalFreeMinutes;
    }

    /**
     * @param string $totalFreeMinutes
     */
    public function setTotalFreeMinutes($totalFreeMinutes)
    {
        $this->totalFreeMinutes = $totalFreeMinutes;
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param string $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return Leg[]
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * @param Leg[] $legs
     */
    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event[] $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    public function addLeg(Leg $leg)
    {
        $this->legs[] = $leg;
    }

    public function addEvent(Event $event)
    {
        $this->events[] = $event;
    }
}