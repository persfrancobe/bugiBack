<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TxtRepository")
 */
class Txt
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Page", inversedBy="txts",cascade={"persist"})
     */
    private $page;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Block", inversedBy="txts")
     */
    private $block;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Language", inversedBy="txts")
     */
    private $language;

    /**
     * @ORM\Column(type="text")
     */
    private $txt;

    public function __toString()
    {
        return $this->getTxt();
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

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getBlock(): ?Block
    {
        return $this->block;
    }

    public function setBlock(?Block $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getTxt(): ?string
    {
        return $this->txt;
    }

    public function setTxt(string $txt): self
    {
        $this->txt = $txt;

        return $this;
    }
}
