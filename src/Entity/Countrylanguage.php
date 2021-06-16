<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Countrylanguage
 * @ApiResource()
 * @ORM\Table(name="countrylanguage", indexes={@ORM\Index(name="IDX_69DFC8A5F92F3E70", columns={"country_id"})})
 * @ORM\Entity
 */
class Countrylanguage
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
     * @ORM\Column(name="countrycode", type="string", length=3, options={"fixed"=true})
     */
    private $countrycode;

    /**
     * @var string
     *
     * @ORM\Column(name="percentage", type="decimal", precision=4, scale=1, options={"default"="0.0"})
     */
    private $percentage = '0.0';

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    public function setCountrycode(string $countrycode): self
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    public function setPercentage(string $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }


}
