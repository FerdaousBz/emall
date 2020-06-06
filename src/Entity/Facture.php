<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
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
    private $Num_fact;

    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_fact;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="userFact")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumFact(): ?int
    {
        return $this->Num_fact;
    }

    public function setNumFact(int $Num_fact): self
    {
        $this->Num_fact = $Num_fact;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getQteFact(): ?int
    {
        return $this->qte_fact;
    }

    public function setQteFact(int $qte_fact): self
    {
        $this->qte_fact = $qte_fact;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
