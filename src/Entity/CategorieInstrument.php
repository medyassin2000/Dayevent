<?php

namespace App\Entity;

use App\Repository\CategorieInstrumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\component\Serializer\Annotation\Groups ;


#[ORM\Entity(repositoryClass:CategorieInstrumentRepository::class)]
class CategorieInstrument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("categorieInstrument")]

    private ?int $id = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Entrer le nom")]
    #[Assert\Length(min:5,minMessage:"Le nom doit etre supérieur a 5 charactére")]
    #[Groups("categorieInstrument")]

    private ?string $nomCategorie ;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Entrer la description")]
    #[Assert\Length(min:5,minMessage:"Le nom doit etre supérieur a 5 charactére")]
    #[Groups("categorieInstrument")]


    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): self
    {
        $this->nomCategorie = $nomCategorie;

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
}
