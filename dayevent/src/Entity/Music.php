<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\MusicRepository;

/**
 * @ORM\Entity
 * @ORM\Table(name="music")
 */

class Music
{
    
    
   
  
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;
    

 
     
      /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="Le nom du morceau ne peut pas être vide.")
     * @Assert\Regex(pattern="/^[a-zA-Z\s]*$/", message="Le nom du morceau ne peut contenir que des lettres.")
     */
    private $nomMorceaux;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Le nom de l'artiste ne peut pas être vide.")
     * @Assert\Regex(pattern="/^[a-zA-Z\s]*$/", message="Le nom de l'artiste ne peut contenir que des lettres.")
     */
    private $nomArtiste;

    /**
     * @ORM\Column(type="string", length=30)
     * 
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

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }


}
