<?php

namespace App\Entity;

 use ApiPlatform\Core\Annotation\ApiResource;
 use App\Repository\ConferenceRepository;
 use Doctrine\Common\Collections\ArrayCollection;
 use Doctrine\Common\Collections\Collection;
 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 use Symfony\Component\Serializer\Annotation\Groups;
 use Symfony\Component\String\Slugger\SluggerInterface;

 /**
  * @ORM\Entity(repositoryClass=ConferenceRepository::class)
  * @UniqueEntity("id")
  *
  * @ApiResource(
  * normalizationContext={"groups"={"my_conf:read"}}
  * )
  */
class Conference
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"my_conf:read"})
     */

    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"my_conf:read"})
     */

    private $city;

    /**
     * @ORM\Column(type="string", length=4)
     * @Groups({"my_conf:read"})
     */

    private $year;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"my_conf:read"})
     */

    private $isInternational;

    public function __toString(): string
   {
        return $this->city.' '.$this->year;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getIsInternational(): ?bool
    {
        return $this->isInternational;
    }

    public function setIsInternational(bool $isInternational): self
    {
        $this->isInternational = $isInternational;

        return $this;
    }
}
