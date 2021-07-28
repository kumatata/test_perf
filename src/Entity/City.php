<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * City
 * @ApiResource()
 * @ORM\Table(name="city", indexes={@ORM\Index(name="IDX_2D5B0234217BBB47", columns={"person_id"}), @ORM\Index(name="IDX_2D5B0234F92F3E70", columns={"country_id"})})
 * @ @ORM\Entity(repositoryClass=CityRepository::class)
 */
class City
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
     * @ORM\Column(name="name", type="string", length=35, options={"fixed"=true})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="countrycode", type="string", length=3, options={"fixed"=true})
     */
    private $countrycode;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=20, options={"fixed"=true})
     */
    private $district;

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     * })
     */
    private $person;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): self
    {
        $this->person = $person;

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
