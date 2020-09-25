<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
//use App\Repository\ClientparticulierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 * normalizationContext={"groups"={"clientParticulier:read"}},
 * denormalizationContext={"groups"={"clientParticulier:write"}},
 * collectionOperations={
 
 * "get"={},
 * "post"={},
 * },
 *  itemOperations={
 * "get"={},
 * "put"={},
 * "delete"={},
 * }
 * )
 * @ORM\Entity
 */
class Clientparticulier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $telephone;

    /**
     * @ORM\Column(type="text")
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $profession;

    /**
     * @ORM\Column(type="text")
     */
    private $salarie;

    /**
     * @ORM\Column(type="decimal", precision=20, scale=3)
     */
    private $salaire_actuel;

    /**
     * @ORM\Column(type="text")
     */
    private $nomEmployeur;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $cni;

    

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="idClientparticulier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getSalarie(): ?string
    {
        return $this->salarie;
    }

    public function setSalarie(string $salarie): self
    {
        $this->salarie = $salarie;

        return $this;
    }

    public function getSalaireActuel(): ?string
    {
        return $this->salaire_actuel;
    }

    public function setSalaireActuel(string $salaire_actuel): self
    {
        $this->salaire_actuel = $salaire_actuel;

        return $this;
    }

    public function getNomEmployeur(): ?string
    {
        return $this->nomEmployeur;
    }

    public function setNomEmployeur(string $nomEmployeur): self
    {
        $this->nomEmployeur = $nomEmployeur;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
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

    
    
}
