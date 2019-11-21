<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlockRepository")
 */
class Block
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Page", inversedBy="blocks")
     */
    private $page;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Txt", mappedBy="block")
     */
    private $txts;

    public function __construct()
    {
        $this->txts = new ArrayCollection();
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

    /**
     * @return Collection|Txt[]
     */
    public function getTxts(): Collection
    {
        return $this->txts;
    }

    public function addTxt(Txt $txt): self
    {
        if (!$this->txts->contains($txt)) {
            $this->txts[] = $txt;
            $txt->setBlock($this);
        }

        return $this;
    }

    public function removeTxt(Txt $txt): self
    {
        if ($this->txts->contains($txt)) {
            $this->txts->removeElement($txt);
            // set the owning side to null (unless already changed)
            if ($txt->getBlock() === $this) {
                $txt->setBlock(null);
            }
        }

        return $this;
    }
}
