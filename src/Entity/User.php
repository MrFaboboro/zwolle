<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $Voornaam;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $Achternaam;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ZwolleGegevens", mappedBy="user")
     */
    private $zwolleGegevens;

    public function __construct()
    {
        $this->zwolleGegevens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->Username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getVoornaam(): ?string
    {
        return $this->Voornaam;
    }

    public function setVoornaam(string $Voornaam): self
    {
        $this->Voornaam = $Voornaam;

        return $this;
    }

    public function getAchternaam(): ?string
    {
        return $this->Achternaam;
    }

    public function setAchternaam(string $Achternaam): self
    {
        $this->Achternaam = $Achternaam;

        return $this;
    }

    /**
     * @return Collection|ZwolleGegevens[]
     */
    public function getZwolleGegevens(): Collection
    {
        return $this->zwolleGegevens;
    }

    public function addZwolleGegeven(ZwolleGegevens $zwolleGegeven): self
    {
        if (!$this->zwolleGegevens->contains($zwolleGegeven)) {
            $this->zwolleGegevens[] = $zwolleGegeven;
            $zwolleGegeven->setUser($this);
        }

        return $this;
    }

    public function removeZwolleGegeven(ZwolleGegevens $zwolleGegeven): self
    {
        if ($this->zwolleGegevens->contains($zwolleGegeven)) {
            $this->zwolleGegevens->removeElement($zwolleGegeven);
            // set the owning side to null (unless already changed)
            if ($zwolleGegeven->getUser() === $this) {
                $zwolleGegeven->setUser(null);
            }
        }

        return $this;
    }
}
