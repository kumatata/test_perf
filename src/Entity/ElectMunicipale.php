<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(attributes={"pagination_enabled"=false})
 * ElectMunicipale
 *
 * @ORM\Table(name="elect_municipale")
 * @ORM\Entity(repositoryClass="App\Repository\ElectMunicipaleRepository")
 */
class ElectMunicipale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_departement", type="string", length=2, nullable=false)
     */
    private $codeDepartement;

    /**
     * @var int
     *
     * @ORM\Column(name="code_commune", type="integer", nullable=false)
     */
    private $codeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_de_la_commune", type="string", length=31, nullable=false)
     */
    private $libelleDeLaCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=36, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_de_naissance", type="string", length=30, nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="election_au_conseil_communautaire", type="string", length=1, nullable=true)
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
