<?php

class Car
{
    // Propriétés (attributs)
    private int $numberOfWheels = 4;    // Une voiture a généralement 4 roues
    private int $currentSpeed = 0;     // Vitesse courante (en km/h)
    private string $color;             // Couleur de la voiture
    private int $numberOfSeats;        // Nombre de sièges
    private string $energyType;        // Type d'énergie (ex. : essence, électrique)
    private float $energyLevel = 100;  // Niveau actuel d'énergie (% ou litres)

    // Constructeur
    public function __construct(string $color, int $numberOfSeats, string $energyType)
    {
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;
        $this->energyType = $energyType;
    }

    // Méthodes
    public function start(): string
    {
        if ($this->energyLevel > 0) {
            return "The car has started.";
        } else {
            return "The car cannot start. The energy level is too low.";
        }
    }

    public function forward(int $speed): string
    {
        if ($this->energyLevel > 0) {
            $this->currentSpeed = $speed;
            $this->energyLevel -= 5; // Consomme de l'énergie en avançant
            return "The car  is moving forward at " . $this->currentSpeed . " km/h.";
        } else {
            return "The car cannot move forward. The energy level is too low.";
        }
    }

    public function brake(): string
    {
        $this->currentSpeed = 0;
        return "The car has stopped.";
    }

    // Getters (accesseurs)
    public function getNumberOfWheels(): int
    {
        return $this->numberOfWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getEnergyLevel(): float
    {
        return $this->energyLevel;
    }

    // Setters (si nécessaire)
    public function setEnergyLevel(float $level): void
    {
        $this->energyLevel = $level;
    }
}
