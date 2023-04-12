<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Music
 *
 * @ORM\Table(name="music")
 * @ORM\Entity
 */
class Music
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
     * @ORM\Column(name="nom_morceaux", type="string", length=50, nullable=false)
     */
    private $nomMorceaux;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_artiste", type="string", length=50, nullable=false)
     */
    private $nomArtiste;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="blob", length=65535, nullable=false)
     */
    private $fichier;


}
