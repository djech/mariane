<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationRepository")
 * @Vich\Uploadable
 */
class Information
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $langue;

    /**
     *
     * @Vich\UploadableField(mapping="photos", fileNameProperty="photoName", size="photoSize")
     *
     * @var File
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $photoName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var integer
     */
    private $photoSize;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     *
     * @OneToOne(targetEntity="App\Entity\About")
     *
     * @JoinColumn(name="about_id", referencedColumnName="id")
     */
    private $about;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Logiciel", mappedBy="information", cascade={"persist"})
     */
    private $logiciels;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Skill", mappedBy="information", cascade={"persist"})
     */
    private $skills;

    /**
     *
     * @OneToOne(targetEntity="App\Entity\Portfolio")
     *
     * @JoinColumn(name="portfolio_id", referencedColumnName="id")
     */
    private $portfolio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Experience", mappedBy="information", cascade={"persist"})
     *
     * @ORM\OrderBy({"dateFin" = "DESC"})
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Formation", mappedBy="information", cascade={"persist"})
     *
     * @ORM\OrderBy({"dateFin" = "IS NULL","dateFin" = "DESC"})
     */
    private $formations;

    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Reference", mappedBy="information", cascade={"persist"})
     *
     */
    private $references;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
        $this->experiences = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->logiciels = new ArrayCollection();
        $this->references = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAbout(): ?About
    {
        return $this->about;
    }

    public function setAbout(?About $about): self
    {
        $this->about = $about;

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setInformation($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->contains($skill)) {
            $this->skills->removeElement($skill);
            // set the owning side to null (unless already changed)
            if ($skill->getInformation() === $this) {
                $skill->setInformation(null);
            }
        }

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

    /**
     * @return Collection|Experience[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Experience $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->setInformation($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): self
    {
        if ($this->experiences->contains($experience)) {
            $this->experiences->removeElement($experience);
            // set the owning side to null (unless already changed)
            if ($experience->getInformation() === $this) {
                $experience->setInformation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Formation[]
     */
    public function getFormations(): Collection
    {
        return $this->formations;
    }

    public function addFormation(Formation $formation): self
    {
        if (!$this->formations->contains($formation)) {
            $this->formations[] = $formation;
            $formation->setInformation($this);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): self
    {
        if ($this->formations->contains($formation)) {
            $this->formations->removeElement($formation);
            // set the owning side to null (unless already changed)
            if ($formation->getInformation() === $this) {
                $formation->setInformation(null);
            }
        }

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(?string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * @return Collection|Logiciel[]
     */
    public function getLogiciels(): Collection
    {
        return $this->logiciels;
    }

    public function addLogiciel(Logiciel $logiciel): self
    {
        if (!$this->logiciels->contains($logiciel)) {
            $this->logiciels[] = $logiciel;
            $logiciel->setInformation($this);
        }

        return $this;
    }

    public function removeLogiciel(Logiciel $logiciel): self
    {
        if ($this->logiciels->contains($logiciel)) {
            $this->logiciels->removeElement($logiciel);
            // set the owning side to null (unless already changed)
            if ($logiciel->getInformation() === $this) {
                $logiciel->setInformation(null);
            }
        }

        return $this;
    }

    /**
     * Retourne le __toString()
     * @return string Libellé
     */
    public function getTitle() : string
    {
        return "Compétence n°";
    }

    /**
     * @return Collection|Reference[]
     */
    public function getReferences(): Collection
    {
        return $this->references;
    }

    public function addReference(Reference $reference): self
    {
        if (!$this->references->contains($reference)) {
            $this->references[] = $reference;
            $reference->setInformation($this);
        }

        return $this;
    }

    public function removeReference(Reference $reference): self
    {
        if ($this->references->contains($reference)) {
            $this->references->removeElement($reference);
            // set the owning side to null (unless already changed)
            if ($reference->getInformation() === $this) {
                $reference->setInformation(null);
            }
        }

        return $this;
    }

    public function setPhoto(?File $photo = null): void
    {
        $this->photo = $photo;

        if (null !== $photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getPhoto(): ?File
    {
        return $this->photo;
    }

    public function getPhotoName(): ?string
    {
        return $this->photoName;
    }

    public function setPhotoName(?string $photoName): self
    {
        $this->photoName = $photoName;

        return $this;
    }

    public function getPhotoSize(): ?int
    {
        return $this->photoSize;
    }

    public function setPhotoSize(?int $photoSize): self
    {
        $this->photoSize = $photoSize;

        return $this;
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

}
