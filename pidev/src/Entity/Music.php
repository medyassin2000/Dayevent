<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Music
 *
 * @ORM\Table(name="music")
 * @ORM\Entity
 */
class Music
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_morceaux", type="string", length=50, nullable=false)
     */
    private $nomMorceaux;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_artiste", type="string", length=50, nullable=false)
     */
    private $nomArtiste;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="blob", length=65535, nullable=false)
     */
    private $fichier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMorceaux(): ?string
    {
        return $this->nomMorceaux;
    }

    public function setNomMorceaux(string $nomMorceaux): self
    {
        $this->nomMorceaux = $nomMorceaux;

        return $this;
    }

    public function getNomArtiste(): ?string
    {
        return $this->nomArtiste;
    }

    public function setNomArtiste(string $nomArtiste): self
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    public function getFichier()
    {
        return $this->fichier;
    }

    public function setFichier($fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }


}
