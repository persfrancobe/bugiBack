<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemplateRepository")
 */
class Template
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $core;

    /**
     * @ORM\Column(type="text")
     */
    private $tmpBefor;

    /**
     * @ORM\Column(type="text")
     */
    private $tmpAfter;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $lastUpdate;

    public function __toString()
    {
        return $this->getName();
    }

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

    public function getCore(): ?string
    {
        return $this->core;
    }

    public function setCore(string $core): self
    {
        $this->core = $core;

        return $this;
    }

    public function getTmpBefor(): ?string
    {
        return $this->tmpBefor;
    }

    public function setTmpBefor(string $tmpBefor): self
    {
        $this->tmpBefor = $tmpBefor;

        return $this;
    }

    public function getTmpAfter(): ?string
    {
        return $this->tmpAfter;
    }

    public function setTmpAfter(string $tmpAfter): self
    {
        $this->tmpAfter = $tmpAfter;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?\DateTimeInterface $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }
}
