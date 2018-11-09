<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorkRepository")
 * @Vich\Uploadable
 */
class Work
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Portfolio", inversedBy="works")
     */
    private $portfolio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\WorkCategory", inversedBy="works")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     *
     * @Vich\UploadableField(mapping="previews", fileNameProperty="previewName", size="previewSize")
     *
     * @var File
     */
    private $preview;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $previewName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $previewSize;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getPortfolio(): ?Portfolio
    {
        return $this->portfolio;
    }

    public function setPortfolio(?Portfolio $portfolio): self
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getCategory(): ?WorkCategory
    {
        return $this->category;
    }

    public function setCategory(?WorkCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setPreview(?File $preview = null): void
    {
        $this->preview = $preview;

        if (null !== $preview) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getPreview(): ?File
    {
        return $this->preview;
    }

    public function setPreviewName(?string $previewName): void
    {
        $this->previewName = $previewName;
    }

    public function getPreviewName(): ?string
    {
        return $this->previewName;
    }

    public function setPreviewSize(?int $previewSize): void
    {
        $this->previewSize = $previewSize;
    }

    public function getPreviewSize(): ?int
    {
        return $this->previewSize;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Retourne le __toString()
     * @return string Libellé
     */
    public function __toString() : string
    {
        return $this->getTitre();
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
}
