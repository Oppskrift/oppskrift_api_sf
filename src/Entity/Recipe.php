<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Every property is based on https://schema.org/Recipe
 * Discussed in https://github.com/Oppskrift/oppskrift_api/issues/5
 * and shown in the doc https://github.com/Oppskrift/oppskrift_doc
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePublished;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inLanguage;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFamilyFriendly;

    /**
     * @ORM\Column(type="dateinterval", nullable=true)
     */
    private $cookTime;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(?\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getDatePublished(): ?\DateTimeInterface
    {
        return $this->datePublished;
    }

    public function setDatePublished(?\DateTimeInterface $datePublished): self
    {
        $this->datePublished = $datePublished;

        return $this;
    }

    public function getInLanguage(): ?string
    {
        return $this->inLanguage;
    }

    public function setInLanguage(?string $inLanguage): self
    {
        $this->inLanguage = $inLanguage;

        return $this;
    }

    public function getIsFamilyFriendly(): ?bool
    {
        return $this->isFamilyFriendly;
    }

    public function setIsFamilyFriendly(bool $isFamilyFriendly): self
    {
        $this->isFamilyFriendly = $isFamilyFriendly;

        return $this;
    }

    public function getCookTime(): ?\DateInterval
    {
        return $this->cookTime;
    }

    public function setCookTime(?\DateInterval $cookTime): self
    {
        $this->cookTime = $cookTime;

        return $this;
    }

}
