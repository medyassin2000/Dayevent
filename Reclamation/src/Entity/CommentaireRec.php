<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CommentaireRec
 *
 * @ORM\Table(name="commentaire_rec", indexes={@ORM\Index(name="id_rec", columns={"id_rec"})})
 * @ORM\Entity
 */
class CommentaireRec
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_comm", type="date", nullable=false)
     */
    private $dateComm;

    /**
    
 * @ORM\Column(type="string", length=255)
 * @Assert\NotBlank(message="Le nom ne doit pas être vide")
 * @Assert\Length(min=10, maxMessage="Le contenu doit dépasser 10 caractères")
 
 */
private $contenu;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @Assert\NotBlank(message="Le nom ne doit pas être vide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rec", referencedColumnName="id_rec")
     * })
    
     */
    private $idRec;

    public function getIdComm(): ?int
    {
        return $this->idComm;
    }

    public function getDateComm(): ?\DateTimeInterface
    {
        return $this->dateComm;
    }

    public function setDateComm(\DateTimeInterface $dateComm): self
    {
        $this->dateComm = $dateComm;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdRec(): ?Reclamation
    {
        return $this->idRec;
    }

    public function setIdRec(?Reclamation $idRec): self
    {
        $this->idRec = $idRec;

        return $this;
    }


}
