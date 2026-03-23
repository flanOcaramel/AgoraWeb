<?php

namespace App\Entity;

use App\Repository\LoginTraceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoginTraceRepository::class)]
#[ORM\Table(name: 'LoginTrace')]
class LoginTrace
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idLoginTrace')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Membre::class)]
    #[ORM\JoinColumn(name: 'idMembre', referencedColumnName: 'idMembre')]
    private ?Membre $membre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, name: 'dateConnexion')]
    private ?\DateTimeInterface $dateConnexion = null;

    #[ORM\Column(length: 45, name: 'adresseIP')]
    private ?string $adresseIP = null;

    #[ORM\Column(name: 'succes')]
    private bool $succes = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMembre(): ?Membre
    {
        return $this->membre;
    }

    public function setMembre(?Membre $membre): static
    {
        $this->membre = $membre;

        return $this;
    }

    public function getDateConnexion(): ?\DateTimeInterface
    {
        return $this->dateConnexion;
    }

    public function setDateConnexion(\DateTimeInterface $dateConnexion): static
    {
        $this->dateConnexion = $dateConnexion;

        return $this;
    }

    public function getAdresseIP(): ?string
    {
        return $this->adresseIP;
    }

    public function setAdresseIP(string $adresseIP): static
    {
        $this->adresseIP = $adresseIP;

        return $this;
    }

    public function isSucces(): bool
    {
        return $this->succes;
    }

    public function setSucces(bool $succes): static
    {
        $this->succes = $succes;

        return $this;
    }
}
