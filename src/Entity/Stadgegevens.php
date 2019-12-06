<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stadgegevens
 *
 * @ORM\Table(name="stadgegevens")
 * @ORM\Entity
 */
class Stadgegevens
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
     * @ORM\Column(name="pos", type="text", length=0, nullable=false)
     */
    private $pos;

    /**
     * @var string
     *
     * @ORM\Column(name="gebruiksdoel_verblijfsobject", type="text", length=0, nullable=false)
     */
    private $gebruiksdoelVerblijfsobject;

    /**
     * @var string
     *
     * @ORM\Column(name="verblijfsobject_status", type="text", length=0, nullable=false)
     */
    private $verblijfsobjectStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="huisnummer", type="text", length=0, nullable=false)
     */
    private $huisnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="huisletter", type="text", length=0, nullable=false)
     */
    private $huisletter;

    /**
     * @var string
     *
     * @ORM\Column(name="huisnummertoevoeging", type="text", length=0, nullable=false)
     */
    private $huisnummertoevoeging;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="text", length=0, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="type_adresseerbaar_object", type="text", length=0, nullable=false)
     */
    private $typeAdresseerbaarObject;

    /**
     * @var string
     *
     * @ORM\Column(name="openbare_ruimte_naam", type="text", length=0, nullable=false)
     */
    private $openbareRuimteNaam;

    /**
     * @var string
     *
     * @ORM\Column(name="identificatie", type="text", length=0, nullable=false)
     */
    private $identificatie;

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

    public function getIdentificatie(): ?string
    {
        return $this->identificatie;
    }

    public function setIdentificatie(string $identificatie): self
    {
        $this->identificatie = $identificatie;

        return $this;
    }


}
