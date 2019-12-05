<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StadgegevensRepository")
 */
class Stadgegevens
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
    private $pos;

    /**
     * @ORM\Column(type="text")
     */
    private $gebruiksdoelVerblijfsobject;

    /**
     * @ORM\Column(type="text")
     */
    private $verblijfsobjectStatus;

    /**
     * @ORM\Column(type="text")
     */
    private $huisnummer;

    /**
     * @ORM\Column(type="text")
     */
    private $huisletter;

    /**
     * @ORM\Column(type="text")
     */
    private $huisnummertoevoeging;

    /**
     * @ORM\Column(type="text")
     */
    private $postcode;

    /**
     * @ORM\Column(type="text")
     */
    private $typeAdresseerbaarObject;

    /**
     * @ORM\Column(type="text")
     */
    private $openbareRuimteNaam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPos(): ?string
    {
        return $this->pos;
    }

    public function setPos(string $pos): self
    {
        $this->pos = $pos;

        return $this;
    }

    public function getGebruiksdoelVerblijfsobject(): ?string
    {
        return $this->gebruiksdoelVerblijfsobject;
    }

    public function setGebruiksdoelVerblijfsobject(string $gebruiksdoelVerblijfsobject): self
    {
        $this->gebruiksdoelVerblijfsobject = $gebruiksdoelVerblijfsobject;

        return $this;
    }

    public function getVerblijfsobjectStatus(): ?string
    {
        return $this->verblijfsobjectStatus;
    }

    public function setVerblijfsobjectStatus(string $verblijfsobjectStatus): self
    {
        $this->verblijfsobjectStatus = $verblijfsobjectStatus;

        return $this;
    }

    public function getHuisnummer(): ?string
    {
        return $this->huisnummer;
    }

    public function setHuisnummer(string $huisnummer): self
    {
        $this->huisnummer = $huisnummer;

        return $this;
    }

    public function getHuisletter(): ?string
    {
        return $this->huisletter;
    }

    public function setHuisletter(string $huisletter): self
    {
        $this->huisletter = $huisletter;

        return $this;
    }

    public function getHuisnummertoevoeging(): ?string
    {
        return $this->huisnummertoevoeging;
    }

    public function setHuisnummertoevoeging(string $huisnummertoevoeging): self
    {
        $this->huisnummertoevoeging = $huisnummertoevoeging;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getTypeAdresseerbaarObject(): ?string
    {
        return $this->typeAdresseerbaarObject;
    }

    public function setTypeAdresseerbaarObject(string $typeAdresseerbaarObject): self
    {
        $this->typeAdresseerbaarObject = $typeAdresseerbaarObject;

        return $this;
    }

    public function getOpenbareRuimteNaam(): ?string
    {
        return $this->openbareRuimteNaam;
    }

    public function setOpenbareRuimteNaam(string $openbareRuimteNaam): self
    {
        $this->openbareRuimteNaam = $openbareRuimteNaam;

        return $this;
    }


}


