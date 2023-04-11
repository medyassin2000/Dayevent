<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CommandeTicket
 *
 * @ORM\Table(name="commande_ticket", indexes={@ORM\Index(name="id_ticket", columns={"id_ticket"}), @ORM\Index(name="commande_ticket_ibfk_1", columns={"id_utilisateur"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommandeTicketRepository")
 */
class CommandeTicket
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
     * @ORM\Column(name="nom_evenement", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le nom est obligatoire")
     */
    private $nomEvenement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     * @Assert\NotBlank(message="Le prix est obligatoire")
     * @Assert\Positive(message="Le prix doit être un nombre positif")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le ID de tickets est obligatoire")
     * @Assert\Positive(message="Le ID de tickets doit être un nombre positif")
     */
    private $idTicket;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvenement(): ?string
    {
        return $this->nomEvenement;
    }

    public function setNomEvenement(string $nomEvenement): self
    {
        $this->nomEvenement = $nomEvenement;

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

    public function getIdTicket(): ?int
    {
        return $this->idTicket;
    }

    public function setIdTicket(int $idTicket): self
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }


}
