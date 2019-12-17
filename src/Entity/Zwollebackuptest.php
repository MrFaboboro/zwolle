<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZwolleGegevens
 *
 * @ORM\Table(name="zwolle_backuptest")
 * @ORM\Entity
 */
class Zwollebackuptest
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
     * @ORM\Column(name="DATA", type="text", length=65535, nullable=false)
     */
    private $data;


    /**
     * @var string
     *
     * @ORM\Column(name="SOURCE", type="text", length=65535, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="LOC", type="text", length=65535, nullable=false)
     */
    private $loc;

    /**
     * @var string
     *
     * @ORM\Column(name="ORG", type="text", length=65535, nullable=false)
     */
    private $org;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD1", type="text", length=65535, nullable=false)
     */
    private $add1;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD2", type="text", length=65535, nullable=false)
     */
    private $add2;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD3", type="text", length=65535, nullable=false)
     */
    private $add3;

    /**
     * @var string
     *
     * @ORM\Column(name="PC", type="text", length=65535, nullable=false)
     */
    private $pc;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY", type="text", length=65535, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="WEB", type="text", length=65535, nullable=false)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="text", length=65535, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Email1", type="text", length=65535, nullable=false)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailAlt", type="text", length=65535, nullable=false)
     */
    private $emailalt;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="text", length=65535, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone1", type="text", length=65535, nullable=false)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneAlt", type="text", length=65535, nullable=false)
     */
    private $phonealt;

    /**
     * @var string
     *
     * @ORM\Column(name="GGPOS", type="text", length=65535, nullable=false)
     */
    private $ggpos;

    /**
     * @var string
     *
     * @ORM\Column(name="Location", type="text", length=65535, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="GGRAT", type="text", length=65535, nullable=false)
     */
    private $ggrat;

    /**
     * @var string
     *
     * @ORM\Column(name="Stars", type="text", length=65535, nullable=false)
     */
    private $stars;

    /**
     * @var string
     *
     * @ORM\Column(name="RevNo", type="text", length=65535, nullable=false)
     */
    private $revno;

    /**
     * @var string
     *
     * @ORM\Column(name="GOOGLE", type="text", length=65535, nullable=false)
     */
    private $google;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc", type="text", length=65535, nullable=false)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASS", type="text", length=65535, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc1", type="text", length=65535, nullable=false)
     */
    private $desc1;

    /**
     * @var string
     *
     * @ORM\Column(name="CAT", type="text", length=65535, nullable=false)
     */
    private $cat;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc2", type="text", length=65535, nullable=false)
     */
    private $desc2;

    /**
     * @var string
     *
     * @ORM\Column(name="Social", type="text", length=65535, nullable=false)
     */
    private $social;

    /**
     * @var string
     *
     * @ORM\Column(name="Facebook", type="text", length=65535, nullable=false)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="Twitter", type="text", length=65535, nullable=false)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="Linkedin", type="text", length=65535, nullable=false)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="Pintrest", type="text", length=65535, nullable=false)
     */
    private $pintrest;

    /**
     * @var string
     *
     * @ORM\Column(name="Instagram", type="text", length=65535, nullable=false)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="Youtube", type="text", length=65535, nullable=false)
     */
    private $youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="Whatsapp", type="text", length=65535, nullable=false)
     */
    private $whatsapp;

    /**
     * @var string
     *
     * @ORM\Column(name="KVK", type="text", length=65535, nullable=false)
     */
    private $kvk;

    /**
     * @var string
     *
     * @ORM\Column(name="No", type="text", length=65535, nullable=false)
     */
    private $no;

    /**
     * @var string
     *
     * @ORM\Column(name="VestingLCL", type="text", length=65535, nullable=false)
     */
    private $vestinglcl;

    /**
     * @var string
     *
     * @ORM\Column(name="No1", type="text", length=65535, nullable=false)
     */
    private $no1;

    /**
     * @var string
     *
     * @ORM\Column(name="VESTINGHead", type="text", length=65535, nullable=false)
     */
    private $vestinghead;

    /**
     * @var string
     *
     * @ORM\Column(name="No2", type="text", length=65535, nullable=false)
     */
    private $no2;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTHead", type="text", length=65535, nullable=false)
     */
    private $posthead;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTCODEHead", type="text", length=65535, nullable=false)
     */
    private $postcodehead;

    /**
     * @var string
     *
     * @ORM\Column(name="CITYHead", type="text", length=65535, nullable=false)
     */
    private $cityhead;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=65535, nullable=false)
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getLoc(): ?string
    {
        return $this->loc;
    }

    public function setLoc(string $loc): self
    {
        $this->loc = $loc;

        return $this;
    }

    public function getOrg(): ?string
    {
        return $this->org;
    }

    public function setOrg(string $org): self
    {
        $this->org = $org;

        return $this;
    }

    public function getAdd1(): ?string
    {
        return $this->add1;
    }

    public function setAdd1(string $add1): self
    {
        $this->add1 = $add1;

        return $this;
    }

    public function getAdd2(): ?string
    {
        return $this->add2;
    }

    public function setAdd2(string $add2): self
    {
        $this->add2 = $add2;

        return $this;
    }

    public function getAdd3(): ?string
    {
        return $this->add3;
    }

    public function setAdd3(string $add3): self
    {
        $this->add3 = $add3;

        return $this;
    }

    public function getPc(): ?string
    {
        return $this->pc;
    }

    public function setPc(string $pc): self
    {
        $this->pc = $pc;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail1(): ?string
    {
        return $this->email1;
    }

    public function setEmail1(string $email1): self
    {
        $this->email1 = $email1;

        return $this;
    }

    public function getEmailalt(): ?string
    {
        return $this->emailalt;
    }

    public function setEmailalt(string $emailalt): self
    {
        $this->emailalt = $emailalt;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(string $phone1): self
    {
        $this->phone1 = $phone1;

        return $this;
    }

    public function getPhonealt(): ?string
    {
        return $this->phonealt;
    }

    public function setPhonealt(string $phonealt): self
    {
        $this->phonealt = $phonealt;

        return $this;
    }

    public function getGgpos(): ?string
    {
        return $this->ggpos;
    }

    public function setGgpos(string $ggpos): self
    {
        $this->ggpos = $ggpos;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getGgrat(): ?string
    {
        return $this->ggrat;
    }

    public function setGgrat(string $ggrat): self
    {
        $this->ggrat = $ggrat;

        return $this;
    }

    public function getStars(): ?string
    {
        return $this->stars;
    }

    public function setStars(string $stars): self
    {
        $this->stars = $stars;

        return $this;
    }

    public function getRevno(): ?string
    {
        return $this->revno;
    }

    public function setRevno(string $revno): self
    {
        $this->revno = $revno;

        return $this;
    }

    public function getGoogle(): ?string
    {
        return $this->google;
    }

    public function setGoogle(string $google): self
    {
        $this->google = $google;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getDesc1(): ?string
    {
        return $this->desc1;
    }

    public function setDesc1(string $desc1): self
    {
        $this->desc1 = $desc1;

        return $this;
    }

    public function getCat(): ?string
    {
        return $this->cat;
    }

    public function setCat(string $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    public function getDesc2(): ?string
    {
        return $this->desc2;
    }

    public function setDesc2(string $desc2): self
    {
        $this->desc2 = $desc2;

        return $this;
    }

    public function getSocial(): ?string
    {
        return $this->social;
    }

    public function setSocial(string $social): self
    {
        $this->social = $social;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getPintrest(): ?string
    {
        return $this->pintrest;
    }

    public function setPintrest(string $pintrest): self
    {
        $this->pintrest = $pintrest;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getWhatsapp(): ?string
    {
        return $this->whatsapp;
    }

    public function setWhatsapp(string $whatsapp): self
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    public function getKvk(): ?string
    {
        return $this->kvk;
    }

    public function setKvk(string $kvk): self
    {
        $this->kvk = $kvk;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getVestinglcl(): ?string
    {
        return $this->vestinglcl;
    }

    public function setVestinglcl(string $vestinglcl): self
    {
        $this->vestinglcl = $vestinglcl;

        return $this;
    }

    public function getNo1(): ?string
    {
        return $this->no1;
    }

    public function setNo1(string $no1): self
    {
        $this->no1 = $no1;

        return $this;
    }

    public function getVestinghead(): ?string
    {
        return $this->vestinghead;
    }

    public function setVestinghead(string $vestinghead): self
    {
        $this->vestinghead = $vestinghead;

        return $this;
    }

    public function getNo2(): ?string
    {
        return $this->no2;
    }

    public function setNo2(string $no2): self
    {
        $this->no2 = $no2;

        return $this;
    }

    public function getPosthead(): ?string
    {
        return $this->posthead;
    }

    public function setPosthead(string $posthead): self
    {
        $this->posthead = $posthead;

        return $this;
    }

    public function getPostcodehead(): ?string
    {
        return $this->postcodehead;
    }

    public function setPostcodehead(string $postcodehead): self
    {
        $this->postcodehead = $postcodehead;

        return $this;
    }

    public function getCityhead(): ?string
    {
        return $this->cityhead;
    }

    public function setCityhead(string $cityhead): self
    {
        $this->cityhead = $cityhead;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }


}
