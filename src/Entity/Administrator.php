<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdministratorRepository")
 */
class Administrator
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_admin;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $semail;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $spassword;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAdmin(): ?int
    {
        return $this->id_admin;
    }

    public function setIdAdmin(int $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    public function getSemail(): ?string
    {
        return $this->semail;
    }

    public function setSemail(string $semail): self
    {
        $this->semail = $semail;

        return $this;
    }

    public function getSpassword(): ?string
    {
        return $this->spassword;
    }

    public function setSpassword(string $spassword): self
    {
        $this->spassword = $spassword;

        return $this;
    }
}
