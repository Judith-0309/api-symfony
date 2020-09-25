<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
//use App\Repository\CompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $typeCompte;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cleRib;

    /**
     * @ORM\Column(type="text")
     */
    private $etatCompte;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $depotInitial;

    
    /**
     * @ORM\OneToMany(targetEntity=Clientparticulier::class, mappedBy="compte")
     */
    private $idClientparticulier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Date_Ouverture;

    public function __construct()
    {
        $this->idClientparticulier = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getCleRib(): ?string
    {
        return $this->cleRib;
    }

    public function setCleRib(string $cleRib): self
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    public function getEtatCompte(): ?string
    {
        return $this->etatCompte;
    }

    public function setEtatCompte(string $etatCompte): self
    {
        $this->etatCompte = $etatCompte;

        return $this;
    }

    public function getDepotInitial(): ?string
    {
        return $this->depotInitial;
    }

    public function setDepotInitial(string $depotInitial): self
    {
        $this->depotInitial = $depotInitial;

        return $this;
    }

    

    /**
     * @return Collection|Clientparticulier[]
     */
    public function getIdClientparticulier(): Collection
    {
        return $this->idClientparticulier;
    }

    public function addIdClientparticulier(Clientparticulier $idClientparticulier): self
    {
        if (!$this->idClientparticulier->contains($idClientparticulier)) {
            $this->idClientparticulier[] = $idClientparticulier;
            $idClientparticulier->setCompte($this);
        }

        return $this;
    }

    public function removeIdClientparticulier(Clientparticulier $idClientparticulier): self
    {
        if ($this->idClientparticulier->contains($idClientparticulier)) {
            $this->idClientparticulier->removeElement($idClientparticulier);
            // set the owning side to null (unless already changed)
            if ($idClientparticulier->getCompte() === $this) {
                $idClientparticulier->setCompte(null);
            }
        }

        return $this;
    }

    public function getDateOuverture(): ?string
    {
        return $this->Date_Ouverture;
    }

    public function setDateOuverture(string $Date_Ouverture): self
    {
        $this->Date_Ouverture = $Date_Ouverture;

        return $this;
    }
}
