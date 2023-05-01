<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\DBAL\Types\Types;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;
use DateTimeInterface;



#[ORM\Table(name: "utilisateur")]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank(message: "Le nom ne doit pas être vide")]
    #[Assert\Length(max: 10, maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern: "/^[^0-9]+$/", message: "Le nom ne doit pas contenir de chiffres")]
    private string $nom;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank(message: "Le prenom ne doit pas être vide")]
    #[Assert\Length(max: 10, maxMessage: "Le prenom ne doit pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern: "/^[^0-9]+$/", message: "Le nom ne doit pas contenir de chiffres")]
    private string $prenom;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank(message: "L'email ne doit pas être vide")]
    #[Assert\Regex(pattern: "/.*@.*$/", message: "L adresse email doit contenir le symbole @")]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(type: "integer", nullable: false)]
    #[Assert\NotBlank(message: "Le numéro de telephone ne doit pas être vide")]
    #[Assert\Length(min: 8, max: 8)]
    private int $telephone;

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: "date", nullable: false)]
    private \DateTime $datenaiss;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;


   

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
   
    public function __toString(): string
    {
        return sprintf("Email: %s\nRoles: %s\nPassword: %s\nVerified: %s\nNom: %s\nPrenom:  %s\nTelephone: %s\n",
            $this->email,
            implode(',', $this->roles),
            $this->password,
            
            $this->nom,
            $this->prenom,
            
            $this->telephone
        );
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
