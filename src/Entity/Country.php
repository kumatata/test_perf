<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 * @ApiResource()
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
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
     * @ORM\Column(name="code", type="string", length=3, options={"fixed"=true})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=52, options={"fixed"=true})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capital", type="integer", nullable=true)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="code2", type="string", length=2, options={"fixed"=true})
     */
    private $code2;

    /**
     * @var int
     *
     * @ORM\Column(name="gdp", type="integer")
     */
    private $gdp;

    /**
     * @var int
     *
     * @ORM\Column(name="population", type="integer")
     */
    private $population;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCapital(): ?int
    {
        return $this->capital;
    }

    public function setCapital(?int $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getCode2(): ?string
    {
        return $this->code2;
    }

    public function setCode2(string $code2): self
    {
        $this->code2 = $code2;

        return $this;
    }

    public function getGdp(): ?int
    {
        return $this->gdp;
    }

    public function setGdp(int $gdp): self
    {
        $this->gdp = $gdp;

        return $this;
    }

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(int $population): self
    {
        $this->population = $population;

        return $this;
    }


}
