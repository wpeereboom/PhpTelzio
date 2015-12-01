<?php
namespace PhpTelzio\Entity;

class Leg
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
    protected $to;

    /**
     * @var string
     */
    protected $toUser;

    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $fromUser;

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
    protected $hangupCause;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $rate;

    /**
     * @var string
     */
    protected $freeMinutes;

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
    public function getStarted()
    {
        return $this->started;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getFreeMinutes()
    {
        return $this->freeMinutes;
    }

    /**
     * @param string $freeMinutes
     */
    public function setFreeMinutes($freeMinutes)
    {
        $this->freeMinutes = $freeMinutes;
    }

    /**
     * @return string
     */
    public function getToUser()
    {
        return $this->toUser;
    }

    /**
     * @param string $toUser
     */
    public function setToUser($toUser)
    {
        $this->toUser = $toUser;
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
    public function getFromUser()
    {
        return $this->fromUser;
    }

    /**
     * @param string $fromUser
     */
    public function setFromUser($fromUser)
    {
        $this->fromUser = $fromUser;
    }
}