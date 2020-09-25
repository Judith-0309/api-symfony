<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
//use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
 */
class Operation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal")
     */
    private $montant;

    /**
     * @ORM\Column(type="text")
     */
    private $dateOperation;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $typeOperation;

   

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="idOperation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte;

    

    public function getId(): ?int
    {
        return $this->id;
    }

  
    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    
    

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of dateOperation
     */ 
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * Set the value of dateOperation
     *
     * @return  self
     */ 
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * Get the value of typeOperation
     */ 
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * Set the value of typeOperation
     *
     * @return  self
     */ 
    public function setTypeOperation($typeOperation)
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }
}
