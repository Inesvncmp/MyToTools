<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $no�mtache;



    #[ORM\ManyToOne(targetEntity: Liste::class, inversedBy: 'taches')]
    #[ORM\JoinColumn(nullable: true)]
    private $liste;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $classement;

    #[ORM\Column(type: 'boolean')]
    private $active = false;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNo�mtache(): ?string
    {
        return $this->no�mtache;
    }

    public function setNo�mtache(string $no�mtache): self
    {
        $this->no�mtache = $no�mtache;

        return $this;
    }



    public function getListe(): ?Liste
    {
        return $this->liste;
    }

    public function setListe(?Liste $liste): self
    {
        $this->liste = $liste;

        return $this;
    }

    public function getClassement(): ?string
    {
        return $this->classement;
    }

    public function setClassement(?string $classement): self
    {
        $this->classement = $classement;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }




}
