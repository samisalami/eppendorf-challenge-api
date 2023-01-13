<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DeviceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeviceRepository::class)]
#[ApiResource]
class Device
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $deviceHealth = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lastUsed = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    /**
     * @param int|null $id
     * @param string|null $location
     * @param string|null $type
     * @param string|null $deviceHealth
     * @param \DateTimeInterface|null $lastUsed
     * @param float|null $price
     * @param string|null $color
     */
    public function __construct(?int $id, ?string $location, ?string $type, ?string $deviceHealth, ?\DateTimeInterface $lastUsed, ?float $price, ?string $color)
    {
        $this->id = $id;
        $this->location = $location;
        $this->type = $type;
        $this->deviceHealth = $deviceHealth;
        $this->lastUsed = $lastUsed;
        $this->price = $price;
        $this->color = $color;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDeviceHealth(): ?string
    {
        return $this->deviceHealth;
    }

    public function setDeviceHealth(string $deviceHealth): self
    {
        $this->deviceHealth = $deviceHealth;

        return $this;
    }

    public function getLastUsed(): ?\DateTimeInterface
    {
        return $this->lastUsed;
    }

    public function setLastUsed(\DateTimeInterface $lastUsed): self
    {
        $this->lastUsed = $lastUsed;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
