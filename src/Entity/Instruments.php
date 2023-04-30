<?php

namespace App\Entity;

use App\Repository\InstrumentsRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Symfony\Component\HttpFoundation\File\Fil;



#[ORM\Entity(repositoryClass: InstrumentsRepository::class)]
#[Vich\Uploadable]
class Instruments
{
    #[ORM\Column(name: 'id_instrument', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    public $idInstrument ;


    #[ORM\Column]
    #[Assert\NotBlank(message:"donner le nom")]
    #[Assert\Length(min:5,minMessage:"Le nom doit etre supérieur a 5 charactére")]
    private ?string $nom =null;






    #[ORM\Column(length: 255)]

    #[Assert\NotBlank(message:"donner le prix")]
    #[Assert\Type(type: 'float', message: "la valeur  est non valide .")]
    private ?Float $prix = null ;

    #[ORM\Column(name: "photo", type:"string", length:255)]




    private $photo;


    #[Vich\UploadableField(mapping: 'product', fileNameProperty: 'photo')]
    private ?File $photoFile=null ;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"donner une description")]
    #[Assert\Length(min:5,minMessage:"La description doit etre supérieur a 5 charactére")]
    private ?string $description= null;

    #[ORM\ManyToOne(targetEntity: CategorieInstrument::class)]
    #[ORM\JoinColumn(name: 'id_categorie', referencedColumnName: 'id')]
    private ?CategorieInstrument $idCategorie=null;


    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'id_utilisateur', referencedColumnName: 'id')]

    private   ?Utilisateur $idUtilisateur=null;

    public function getIdInstrument(): ?int
    {
        return $this->idInstrument;
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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }




    public function getPhoto(): ?string
    {
        if ($this->photo) {
            return  $this->photo;
        }

        return null;
    }
    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo ?? '';

        return $this;
    }



    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdCategorie(): ?CategorieInstrument
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?CategorieInstrument $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

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

    public function setIdInstrument(string $idInstrument): self
    {
        $this->idInstrument = $idInstrument;

        return $this;
    }
    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }


    public function setPhotoFile(?File $photoFile = null): self
    {
        $this->photoFile = $photoFile;

        if ($photoFile instanceof UploadedFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }



}
