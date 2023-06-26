<?php

class Transport
{
    protected string $name;
    protected int $speed;

    public function __construct($name, $speed) {
        $this->name = $name;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function getInfo(): string
    {
        return "name: {$this->name}, speed: {$this->speed} km/h";
    }
}

class Car extends Transport
{
    private int $numDoors;

    public function __construct($name, $speed, $numDoors) {
        parent::__construct($name, $speed);
        $this->numDoors = $numDoors;
    }

    /**
     * @param int $numDoors
     */
    public function setNumDoors(int $numDoors): void
    {
        $this->numDoors = $numDoors;
    }

    /**
     * @return int
     */
    public function getNumDoors(): int
    {
        return $this->numDoors;
    }

    public function startEngine(): string
    {
        return "Starting {$this->name} engine.";
    }
}

class Bicycle extends Transport
{
    private int $numGears;

    public function __construct($name, $speed, $numGears) {
        parent::__construct($name, $speed);
        $this->numGears = $numGears;
    }

    /**
     * @return int
     */
    public function getNumGears(): int
    {
        return $this->numGears;
    }

    /**
     * @param int $numGears
     */
    public function setNumGears(int $numGears): void
    {
        $this->numGears = $numGears;
    }

    public function ringBell(): string
    {
        return "Ring {$this->name} bell.";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Gears: {$this->numGears}";
    }
}

class Boat extends Transport
{
    private int $maxPassengers;

    public function __construct($name, $speed, $maxPassengers) {
        parent::__construct($name, $speed);
        $this->maxPassengers = $maxPassengers;
    }

    /**
     * @return int
     */
    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }

    /**
     * @param int $maxPassengers
     */
    public function setMaxPassengers(int $maxPassengers): void
    {
        $this->maxPassengers = $maxPassengers;
    }

    public function sail(): string
    {
        return "Sailing on {$this->name} with {$this->maxPassengers} passengers.";
    }
}

function getTransportInfo(array $transport): void
{
    foreach($transport as $item){
        echo $item->getInfo();
    }
}