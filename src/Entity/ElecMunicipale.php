<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ElecMunicipaleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ElecMunicipaleRepository::class)
 */
class ElecMunicipale
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $codeDepartement;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeCommune;

    /**
     * @ORM\Column(type="string", length=31)
     */
    private $libelleDeLaCommune;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $dateDeNaissance;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $electionAuConseilCommunautaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }

    public function setCodeDepartement(string $codeDepartement): self
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    public function getCodeCommune(): ?int
    {
        return $this->codeCommune;
    }

    public function setCodeCommune(int $codeCommune): self
    {
        $this->codeCommune = $codeCommune;

        return $this;
    }

    public function getLibelleDeLaCommune(): ?string
    {
        return $this->libelleDeLaCommune;
    }

    public function setLibelleDeLaCommune(string $libelleDeLaCommune): self
    {
        $this->libelleDeLaCommune = $libelleDeLaCommune;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
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

    public function getDateDeNaissance(): ?string
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(string $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getElectionAuConseilCommunautaire(): ?string
    {
        return $this->electionAuConseilCommunautaire;
    }

    public function setElectionAuConseilCommunautaire(?string $electionAuConseilCommunautaire): self
    {
        $this->electionAuConseilCommunautaire = $electionAuConseilCommunautaire;

        return $this;
    }
}
