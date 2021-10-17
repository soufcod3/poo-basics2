<?php
require_once 'Vehicule.php';

class Truck extends Vehicule 
{
    protected int $capacity;
    protected int $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacity = $capacity;
    }

    public function setLoad(int $load)
    {
        $this->load = $load;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function loadStatus(): string
    {
        if ($this->getLoad() >= $this->getCapacity()) {
            return "Full";
        } else {
            return "In Filling";
        }
    }
}