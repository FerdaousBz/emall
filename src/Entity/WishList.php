<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WishListRepository")
 */
class WishList
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
    private $Num_wishL;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_wishL;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumWishL(): ?int
    {
        return $this->Num_wishL;
    }

    public function setNumWishL(int $Num_wishL): self
    {
        $this->Num_wishL = $Num_wishL;

        return $this;
    }

    public function getNomWishL(): ?string
    {
        return $this->Nom_wishL;
    }

    public function setNomWishL(string $Nom_wishL): self
    {
        $this->Nom_wishL = $Nom_wishL;

        return $this;
    }

    public function __toString()
    {
        return  $this->Nom_wishL;
    }
}
