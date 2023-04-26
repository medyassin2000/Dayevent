<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 * @Vich\Uploadable
 */

class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length( * min = 3, * max = 50, 
    * * minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
    *  * maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères" * )
    * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length( * min = 3, * max = 50, 
    * * minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
    *  * maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères" * )
    * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $lieu;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     *  @Assert\GreaterThanOrEqual("today", message="La Date doit etre au minimum d'aujourd'hui")
     */
    private $date;

    /**
     * @ORM\Column(type="integer", length=255)
     * * @Assert\Length( * min = 2, * max = 50, 
    * * minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
    *  * maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères" * )
    * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $nb_ticket;

    /**
     * @ORM\Column(type="integer", length=30)
     * @Assert\NotBlank(message="Prix ne doit pas etre vide")
     * @Assert\Positive(message="le prix doit etre superieur a 0")
     */
    private $prix;

    
   /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $affiche;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNbTicket(): ?int
    {
        return $this->nb_ticket;
    }

    public function setNbTicket(int $nb_ticket): self
    {
        $this->nb_ticket = $nb_ticket;

        return $this;
    }

    public function getnb_ticket(): ?string
    {
        return $this->nb_ticket;
    }

    public function setnb_ticket(int $nb_ticket): self
    {
        $this->nb_ticket = $nb_ticket;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(?string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }
  
}
