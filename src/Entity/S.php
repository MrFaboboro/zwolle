<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * S
 *
 * @ORM\Table(name="s")
 * @ORM\Entity
 */
class S
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }


}
