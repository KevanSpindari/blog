<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $summary;

    /**
     * @ORM\Column(type="date")
     */
    private $creatdate;

    /**
     * @ORM\Column(type="date")
     */
    private $editdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $madeby;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getCreatdate(): ?\DateTimeInterface
    {
        return $this->creatdate;
    }

    public function setCreatdate(\DateTimeInterface $creatdate): self
    {
        $this->creatdate = $creatdate;

        return $this;
    }

    public function getEditdate(): ?\DateTimeInterface
    {
        return $this->editdate;
    }

    public function setEditdate(\DateTimeInterface $editdate): self
    {
        $this->editdate = $editdate;

        return $this;
    }

    public function getMadeby(): ?string
    {
        return $this->madeby;
    }

    public function setMadeby(string $madeby): self
    {
        $this->madeby = $madeby;

        return $this;
    }
}
