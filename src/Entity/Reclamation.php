<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rec", type="date", nullable=false)
     */
    private $dateRec;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le titre ne doit pas être vide")
     * @Assert\Length(max=20, maxMessage="Le contenu doit dépasser 20 caractères")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=false)
     * @Assert\NotBlank(message="La description ne doit pas être vide")
     * @Assert\Length(min=10, maxMessage="Le contenu doit dépasser 10 caractères")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=false)
     * @Assert\NotBlank(message="Le numéro ne doit pas être vide")
     * @Assert\Regex(
 *     pattern="/^[0-9]{8}$/",
 *     message="Le numéro doit être en 8 chiffres"
 * )
     * 
     */
    private $tel;

    public function getIdRec(): ?int
    {
        return $this->idRec;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->dateRec;
    }

    public function setDateRec(\DateTimeInterface $dateRec): self
    {
        $this->dateRec = $dateRec;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
    public function __toString()
    {
        return "ID: " . $this->idRec .
            " | Date: " . $this->dateRec->format('Y-m-d') . // You can format the date as needed
            " | Titre: " . $this->titre .
            " | Description: " . $this->description .
            " | Tel: " . $this->tel;
    }



}
