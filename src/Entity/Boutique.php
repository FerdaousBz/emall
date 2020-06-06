<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BoutiqueRepository")
 */
class Boutique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Num_boutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_boutique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="boutique")
     */
    private $userboutique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="boutique")
     */
    private $prodboutique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="prodboutique")
     */
    private $produits;

    public function __construct()
    {
        $this->userboutique = new ArrayCollection();
        $this->prodboutique = new ArrayCollection();
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumBoutique(): ?int
    {
        return $this->Num_boutique;
    }

    public function setNumBoutique(int $Num_boutique): self
    {
        $this->Num_boutique = $Num_boutique;

        return $this;
    }

    public function getNomBoutique(): ?string
    {
        return $this->Nom_boutique;
    }

    public function setNomBoutique(string $Nom_boutique): self
    {
        $this->Nom_boutique = $Nom_boutique;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserboutique(): Collection
    {
        return $this->userboutique;
    }

    public function addUserboutique(User $userboutique): self
    {
        if (!$this->userboutique->contains($userboutique)) {
            $this->userboutique[] = $userboutique;
            $userboutique->setBoutique($this);
        }

        return $this;
    }

    public function removeUserboutique(User $userboutique): self
    {
        if ($this->userboutique->contains($userboutique)) {
            $this->userboutique->removeElement($userboutique);
            // set the owning side to null (unless already changed)
            if ($userboutique->getBoutique() === $this) {
                $userboutique->setBoutique(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProdboutique(): Collection
    {
        return $this->prodboutique;
    }

    public function addProdboutique(Produit $prodboutique): self
    {
        if (!$this->prodboutique->contains($prodboutique)) {
            $this->prodboutique[] = $prodboutique;
            $prodboutique->setBoutique($this);
        }

        return $this;
    }

    public function removeProdboutique(Produit $prodboutique): self
    {
        if ($this->prodboutique->contains($prodboutique)) {
            $this->prodboutique->removeElement($prodboutique);
            // set the owning side to null (unless already changed)
            if ($prodboutique->getBoutique() === $this) {
                $prodboutique->setBoutique(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setProdboutique($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getProdboutique() === $this) {
                $produit->setProdboutique(null);
            }
        }

        return $this;
    }
}
