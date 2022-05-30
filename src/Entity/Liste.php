<?php

namespace App\Entity;

use App\Repository\ListeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListeRepository::class)]
class Liste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomlist;

    #[ORM\OneToMany(mappedBy: 'liste', targetEntity: Tache::class, orphanRemoval: true)]
    private $taches;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'listes')]
    private $utils;

    public function __construct()
    {
        $this->taches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomlist(): ?string
    {
        return $this->nomlist;
    }

    public function setNomlist(string $nomlist): self
    {
        $this->nomlist = $nomlist;

        return $this;
    }

    /**
     * @return Collection<int, Tache>
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches[] = $tach;
            $tach->setListe($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->removeElement($tach)) {
            // set the owning side to null (unless already changed)
            if ($tach->getListe() === $this) {
                $tach->setListe(null);
            }
        }

        return $this;
    }

    public function getUtils(): ?User
    {
        return $this->utils;
    }

    public function setUtils(?User $utils): self
    {
        $this->utils = $utils;

        return $this;
    }
}
