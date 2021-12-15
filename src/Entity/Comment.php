<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\CommentRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 *
 * @ApiResource(
 *     collectionOperations={"get"={"normalization_context"={"groups"="comment:list"}}},
 *     itemOperations={"get"={"normalization_context"={"groups"="comment:item"}}},
 *     order={"createdAt"="DESC"},
 *     paginationEnabled=false
 * )
 *
 * @ApiFilter(SearchFilter::class, properties={"conference": "exact"})
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    [Groups(['comment:list', 'comment:item'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    [Groups(['comment:list', 'comment:item'])]
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    [Groups(['comment:list', 'comment:item'])]
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    [Groups(['comment:list', 'comment:item'])]
    private $email;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    [Groups(['comment:list', 'comment:item'])]
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    [Groups(['comment:list', 'comment:item'])]
    private $photoFilename;

    public function __toString(): string
    {
        return $this->city.' '.$this->year;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPhotoFilename(): ?string
    {
        return $this->photoFilename;
    }

    public function setPhotoFilename(?string $photoFilename): self
    {
        $this->photoFilename = $photoFilename;

        return $this;
    }
}
