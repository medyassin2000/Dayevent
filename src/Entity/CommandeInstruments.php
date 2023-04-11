<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeInstrumentsRepository;

#[ORM\Entity(repositoryClass: CommandeInstrumentsRepository::class)]
class CommandeInstruments
{
    #[ORM\Column(name: 'id_commande', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $idCommande;

    #[ORM\Column(length: 255)]
    private $nomProduit;

    #[ORM\Column(length: 255)]
    private $prix;

    #[ORM\Column(length: 255)]
    private $date;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
