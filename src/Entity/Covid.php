<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Covid
 * @ApiResource()
 * @ORM\Table(name="covid")
 *  @ORM\Entity(repositoryClass=CovidRepository::class)
 */
class Covid
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
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=10)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_cas_confirmes", type="integer")
     */
    private $totalCasConfirmes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_deces_hopital", type="integer")
     */
    private $totalDecesHopital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_deces_ehpad", type="string", length=5)
     */
    private $totalDecesEhpad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cas_confirmes_ehpad", type="string", length=6)
     */
    private $totalCasConfirmesEhpad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cas_possibles_ehpad", type="string", length=5)
     */
    private $totalCasPossiblesEhpad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patients_reanimation", type="string", length=4)
     */
    private $patientsReanimation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patients_hospitalises", type="string", length=5)
     */
    private $patientsHospitalises;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_patients_gueris", type="string", length=6)
     */
    private $totalPatientsGueris;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nouveaux_patients_hospitalises", type="string", length=4)
     */
    private $nouveauxPatientsHospitalises;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nouveaux_patients_reanimation", type="string", length=3)
     */
    private $nouveauxPatientsReanimation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTotalCasConfirmes(): ?int
    {
        return $this->totalCasConfirmes;
    }

    public function setTotalCasConfirmes(?int $totalCasConfirmes): self
    {
        $this->totalCasConfirmes = $totalCasConfirmes;

        return $this;
    }

    public function getTotalDecesHopital(): ?int
    {
        return $this->totalDecesHopital;
    }

    public function setTotalDecesHopital(?int $totalDecesHopital): self
    {
        $this->totalDecesHopital = $totalDecesHopital;

        return $this;
    }

    public function getTotalDecesEhpad(): ?string
    {
        return $this->totalDecesEhpad;
    }

    public function setTotalDecesEhpad(?string $totalDecesEhpad): self
    {
        $this->totalDecesEhpad = $totalDecesEhpad;

        return $this;
    }

    public function getTotalCasConfirmesEhpad(): ?string
    {
        return $this->totalCasConfirmesEhpad;
    }

    public function setTotalCasConfirmesEhpad(?string $totalCasConfirmesEhpad): self
    {
        $this->totalCasConfirmesEhpad = $totalCasConfirmesEhpad;

        return $this;
    }

    public function getTotalCasPossiblesEhpad(): ?string
    {
        return $this->totalCasPossiblesEhpad;
    }

    public function setTotalCasPossiblesEhpad(?string $totalCasPossiblesEhpad): self
    {
        $this->totalCasPossiblesEhpad = $totalCasPossiblesEhpad;

        return $this;
    }

    public function getPatientsReanimation(): ?string
    {
        return $this->patientsReanimation;
    }

    public function setPatientsReanimation(?string $patientsReanimation): self
    {
        $this->patientsReanimation = $patientsReanimation;

        return $this;
    }

    public function getPatientsHospitalises(): ?string
    {
        return $this->patientsHospitalises;
    }

    public function setPatientsHospitalises(?string $patientsHospitalises): self
    {
        $this->patientsHospitalises = $patientsHospitalises;

        return $this;
    }

    public function getTotalPatientsGueris(): ?string
    {
        return $this->totalPatientsGueris;
    }

    public function setTotalPatientsGueris(?string $totalPatientsGueris): self
    {
        $this->totalPatientsGueris = $totalPatientsGueris;

        return $this;
    }

    public function getNouveauxPatientsHospitalises(): ?string
    {
        return $this->nouveauxPatientsHospitalises;
    }

    public function setNouveauxPatientsHospitalises(?string $nouveauxPatientsHospitalises): self
    {
        $this->nouveauxPatientsHospitalises = $nouveauxPatientsHospitalises;

        return $this;
    }

    public function getNouveauxPatientsReanimation(): ?string
    {
        return $this->nouveauxPatientsReanimation;
    }

    public function setNouveauxPatientsReanimation(?string $nouveauxPatientsReanimation): self
    {
        $this->nouveauxPatientsReanimation = $nouveauxPatientsReanimation;

        return $this;
    }


}
