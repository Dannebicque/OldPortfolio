<?php

namespace App\Entity;

use App\Repository\TraceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraceRepository::class)
 */
class Trace
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_post;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_validated;

    /**
     * @ORM\Column(type="boolean")
     */
    private $validate;

    /**
     * @ORM\ManyToOne(targetEntity=Etudiant::class, inversedBy="traces")
     */
    private $student;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDatePost(): ?\DateTimeInterface
    {
        return $this->date_post;
    }

    public function setDatePost(\DateTimeInterface $date_post): self
    {
        $this->date_post = $date_post;

        return $this;
    }

    public function getDateValidated(): ?\DateTimeInterface
    {
        return $this->date_validated;
    }

    public function setDateValidated(?\DateTimeInterface $date_validated): self
    {
        $this->date_validated = $date_validated;

        return $this;
    }

    public function getValidate(): ?bool
    {
        return $this->validate;
    }

    public function setValidate(bool $validate): self
    {
        $this->validate = $validate;

        return $this;
    }

    public function getStudent(): ?Etudiant
    {
        return $this->student;
    }

    public function setStudent(?Etudiant $student): self
    {
        $this->student = $student;

        return $this;
    }
}
