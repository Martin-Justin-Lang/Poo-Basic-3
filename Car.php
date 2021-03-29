<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $nbenergyLevel;


public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    } 

public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

public function start(): string
    {
        $this->currentSpeed = 20;
    
        return "Go !";
    }
public function forward(): string
    {
        $this->currentSpeed = 100;
    
        return "On est bien, cheveux au vent ! On accélère !";
    }

public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "Stoooooooop! (grincement de pneus)";
       return $sentence;
    }

    



 public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


public function getNbSeats(): int
{
    return $this->nbSeats;
}

public function getNbEnergyLevel(): int
{
    return $this->nbenergyLevel;
}

public function dump()
{
    var_dump($this);
}

}