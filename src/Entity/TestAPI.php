<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TestAPIRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TestAPIRepository::class)
 *
 * @ApiResource(
 * normalizationContext={"groups"={"my_listing:read"}}
 * )
 */

class TestAPI
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"my_listing:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"my_listing:read"})
     */
    private $Page;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"my_listing:read"})
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"my_listing:read"})
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"my_listing:read"})
     */
    private $Content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPage(): ?string
    {
        return $this->Page;
    }

    public function setPage(string $Page): self
    {
        $this->Page = $Page;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }
}
