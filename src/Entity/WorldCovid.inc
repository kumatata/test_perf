<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * WorldCovid
 * @ApiResource()
 * @ORM\Table(name="world_covid")
 * @ORM\Entity
 */
class WorldCovid
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
     * @ORM\Column(name="Date", type="string", length=10)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pays", type="string", length=25)
     */
    private $pays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Infections", type="integer")
     */
    private $infections;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Deces", type="integer")
     */
    private $deces;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Guerisons", type="integer")
     */
    private $guerisons;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TauxDeces", type="decimal", precision=4, scale=2)
     */
    private $tauxdeces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TauxGuerison", type="decimal", precision=5, scale=2)
     */
    private $tauxguerison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TauxInfection", type="decimal", precision=6, scale=2)
     */
    private $tauxinfection;

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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getInfections(): ?int
    {
        return $this->infections;
    }

    public function setInfections(?int $infections): self
    {
        $this->infections = $infections;

        return $this;
    }

    public function getDeces(): ?int
    {
        return $this->deces;
    }

    public function setDeces(?int $deces): self
    {
        $this->deces = $deces;

        return $this;
    }

    public function getGuerisons(): ?int
    {
        return $this->guerisons;
    }

    public function setGuerisons(?int $guerisons): self
    {
        $this->guerisons = $guerisons;

        return $this;
    }

    public function getTauxdeces(): ?string
    {
        return $this->tauxdeces;
    }

    public function setTauxdeces(?string $tauxdeces): self
    {
        $this->tauxdeces = $tauxdeces;

        return $this;
    }

    public function getTauxguerison(): ?string
    {
        return $this->tauxguerison;
    }

    public function setTauxguerison(?string $tauxguerison): self
    {
        $this->tauxguerison = $tauxguerison;

        return $this;
    }

    public function getTauxinfection(): ?string
    {
        return $this->tauxinfection;
    }

    public function setTauxinfection(?string $tauxinfection): self
    {
        $this->tauxinfection = $tauxinfection;

        return $this;
    }


}
