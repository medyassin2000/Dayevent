<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=200, nullable=false)
     */
    private $contenu;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rec", referencedColumnName="id_rec")
     * })
     */
    private $idRec;


}
