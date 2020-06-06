<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
 * @ORM\ManyToOne(targetEntity="App\Entity\Boutique", inversedBy="userboutique")
 */
private $boutique;

/**
 * @ORM\OneToMany(targetEntity="App\Entity\Facture", mappedBy="user")
 */
private $userFact;

/**
 * @ORM\OneToOne(targetEntity="App\Entity\WishList", cascade={"persist", "remove"})
 */
private $userWishL;

public function __construct()
    {
    parent::__construct();
    // your own logic

    $this->userFact = new ArrayCollection();    }

public function getBoutique(): ?Boutique
{
    return $this->boutique;
}

public function setBoutique(?Boutique $boutique): self
{
    $this->boutique = $boutique;

    return $this;
}

/**
 * @return Collection|Facture[]
 */
public function getUserFact(): Collection
{
    return $this->userFact;
}

public function addUserFact(Facture $userFact): self
{
    if (!$this->userFact->contains($userFact)) {
        $this->userFact[] = $userFact;
        $userFact->setUser($this);
    }

    return $this;
}

public function removeUserFact(Facture $userFact): self
{
    if ($this->userFact->contains($userFact)) {
        $this->userFact->removeElement($userFact);
        // set the owning side to null (unless already changed)
        if ($userFact->getUser() === $this) {
            $userFact->setUser(null);
        }
    }

    return $this;
}

public function getUserWishL(): ?WishList
{
    return $this->userWishL;
}

public function setUserWishL(?WishList $userWishL): self
{
    $this->userWishL = $userWishL;

    return $this;
}
}
