<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
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
    private $Num_panier;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_prod;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumPanier(): ?int
    {
        return $this->Num_panier;
    }

    public function setNumPanier(int $Num_panier): self
    {
        $this->Num_panier = $Num_panier;

        return $this;
    }

    public function getQteProd(): ?int
    {
        return $this->qte_prod;
    }

    public function setQteProd(int $qte_prod): self
    {
        $this->qte_prod = $qte_prod;

        return $this;
    }
    public function __toString()
    {
        return  $this->Num_panier;
    }

}
