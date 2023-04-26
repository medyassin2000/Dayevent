<?php

namespace App\Entity;

use App\Repository\CommentairetestRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\BadWordValidator;
/**
 * @ORM\Entity(repositoryClass=CommentairetestRepository::class)
 */
class Commentairetest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Regex(
 *     pattern="/bad|test/i",
 *     match=false,
 *     message="N'utilise pas les gros mots."
 * )
 */
     
    
    private $texte;
    
    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $id_utilisateur;
    
    /**
     * @ORM\Column(type="integer", length=255)
     */
    public $id_evenement;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(int $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getIdEvenement(): ?int
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(int $id_evenement): self
    {
        $this->id_evenement = $id_evenement;

        return $this;
    }
}
