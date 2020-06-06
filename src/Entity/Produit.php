<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
    private $Num_prod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_prod;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Boutique", inversedBy="prodboutique")
     */
    private $boutique;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Boutique", inversedBy="produits")
     */
    private $prodboutique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumProd(): ?int
    {
        return $this->Num_prod;
    }

    public function setNumProd(int $Num_prod): self
    {
        $this->Num_prod = $Num_prod;

        return $this;
    }

    public function getNomProd(): ?string
    {
        return $this->Nom_prod;
    }

    public function setNomProd(string $Nom_prod): self
    {
        $this->Nom_prod = $Nom_prod;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

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

    public function getBoutique(): ?Boutique
    {
        return $this->boutique;
    }

    public function setBoutique(?Boutique $boutique): self
    {
        $this->boutique = $boutique;

        return $this;
    }

    public function getProdboutique(): ?Boutique
    {
        return $this->prodboutique;
    }

    public function setProdboutique(?Boutique $prodboutique): self
    {
        $this->prodboutique = $prodboutique;

        return $this;
    }
}
