<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;




/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */

class Utilisateur  implements UserInterface
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
  * @ORM\Column(name="nom", type="string", length=50, nullable=false)
 * @Assert\NotBlank(message="Le nom ne doit pas être vide")
 * @Assert\Length(max=10, maxMessage="Le nom ne doit pas dépasser {{ limit }} caractères")
 * @Assert\Regex(pattern="/^[^0-9]+$/", message="Le nom ne doit pas contenir de chiffres")
 */
private $nom;


    /**
* @ORM\Column(name="prenom", type="string", length=50, nullable=false)
 * @Assert\NotBlank(message="Le prenom ne doit pas être vide")
 * @Assert\Length(max=10, maxMessage="Le prenom ne doit pas dépasser {{ limit }} caractères")
 * @Assert\Regex(pattern="/^[^0-9]+$/", message="Le nom ne doit pas contenir de chiffres")
 */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le numéro de telephone ne doit pas être vide")
     * @Assert\Length(min=8, max=8)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     * @Assert\NotBlank(message="L'email ne doit pas être vide")
    * @Assert\Regex(     pattern="/.*@.*$/",     message="L adresse email doit contenir le symbole @")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le mot de passe ne doit pas être vide")
     
     */
    private $motDePasse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaiss", type="date", nullable=false)
     */
    private $datenaiss;

    

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }
    public function getUsername(): ?string
    {
        return $this->email;
    }

    public function getRoles()
    {
        
    }

    public function getPassword(): string
    {
        return $this->motDePasse;
    }

    public function getSalt()
    {
        // you do not need to use a salt with modern password hashing
        // see https://auth0.com/blog/adding-salt-to-hashing-a-better-way-to-store-passwords/
        
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getUserIdentifier(): ?string
{
    return $this->email;
}

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    


}