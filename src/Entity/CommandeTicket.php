<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeTicket
 *
 * @ORM\Table(name="commande_ticket", indexes={@ORM\Index(name="id_ticket", columns={"id_ticket"}), @ORM\Index(name="commande_ticket_ibfk_1", columns={"id_utilisateur"})})
 * @ORM\Entity
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
     */
    private $nomEvenement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
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


}
