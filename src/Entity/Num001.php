<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Num001
 *
 * @ORM\Table(name="num001")
 * @ORM\Entity
 */
class Num001
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
     * @ORM\Column(name="identificatie", type="text", length=0, nullable=false)
     */
    private $identificatie;

    /**
     * @var string
     *
     * @ORM\Column(name="aanduiding_record_inactief", type="text", length=0, nullable=false)
     */
    private $aanduidingRecordInactief;

    /**
     * @var string
     *
     * @ORM\Column(name="aanduiding_record_correctie", type="text", length=0, nullable=false)
     */
    private $aanduidingRecordCorrectie;

    /**
     * @var string
     *
     * @ORM\Column(name="huisnummer", type="text", length=0, nullable=false)
     */
    private $huisnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="officieel", type="text", length=0, nullable=false)
     */
    private $officieel;

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
     * @ORM\Column(name="text", type="text", length=0, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="in_onderzoek", type="text", length=0, nullable=false)
     */
    private $inOnderzoek;

    /**
     * @var string
     *
     * @ORM\Column(name="type_adresseerbaar_object", type="text", length=0, nullable=false)
     */
    private $typeAdresseerbaarObject;

    /**
     * @var string
     *
     * @ORM\Column(name="brondocumentdatum", type="text", length=0, nullable=false)
     */
    private $brondocumentdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="brondocumentnummer", type="text", length=0, nullable=false)
     */
    private $brondocumentnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="nummeraanduiding_status", type="text", length=0, nullable=false)
     */
    private $nummeraanduidingStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="gerelateerde_openbare_ruimteidentificatie", type="text", length=0, nullable=false)
     */
    private $gerelateerdeOpenbareRuimteidentificatie;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAanduidingRecordInactief(): ?string
    {
        return $this->aanduidingRecordInactief;
    }

    public function setAanduidingRecordInactief(string $aanduidingRecordInactief): self
    {
        $this->aanduidingRecordInactief = $aanduidingRecordInactief;

        return $this;
    }

    public function getAanduidingRecordCorrectie(): ?string
    {
        return $this->aanduidingRecordCorrectie;
    }

    public function setAanduidingRecordCorrectie(string $aanduidingRecordCorrectie): self
    {
        $this->aanduidingRecordCorrectie = $aanduidingRecordCorrectie;

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

    public function getOfficieel(): ?string
    {
        return $this->officieel;
    }

    public function setOfficieel(string $officieel): self
    {
        $this->officieel = $officieel;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getInOnderzoek(): ?string
    {
        return $this->inOnderzoek;
    }

    public function setInOnderzoek(string $inOnderzoek): self
    {
        $this->inOnderzoek = $inOnderzoek;

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

    public function getBrondocumentdatum(): ?string
    {
        return $this->brondocumentdatum;
    }

    public function setBrondocumentdatum(string $brondocumentdatum): self
    {
        $this->brondocumentdatum = $brondocumentdatum;

        return $this;
    }

    public function getBrondocumentnummer(): ?string
    {
        return $this->brondocumentnummer;
    }

    public function setBrondocumentnummer(string $brondocumentnummer): self
    {
        $this->brondocumentnummer = $brondocumentnummer;

        return $this;
    }

    public function getNummeraanduidingStatus(): ?string
    {
        return $this->nummeraanduidingStatus;
    }

    public function setNummeraanduidingStatus(string $nummeraanduidingStatus): self
    {
        $this->nummeraanduidingStatus = $nummeraanduidingStatus;

        return $this;
    }

    public function getGerelateerdeOpenbareRuimteidentificatie(): ?string
    {
        return $this->gerelateerdeOpenbareRuimteidentificatie;
    }

    public function setGerelateerdeOpenbareRuimteidentificatie(string $gerelateerdeOpenbareRuimteidentificatie): self
    {
        $this->gerelateerdeOpenbareRuimteidentificatie = $gerelateerdeOpenbareRuimteidentificatie;

        return $this;
    }


}
