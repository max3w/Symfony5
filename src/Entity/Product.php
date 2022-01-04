<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
#[ApiResource(setHeader: [
    "X-Total-Count" => "10"
])]
class Product
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
    private $sku;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    #/** //old
    # * @ORM\ManyToOne(targetEntity=Specifications::class, inversedBy="products")
    # * @ORM\JoinColumn(nullable=false)
    # */
    /**
    * @ORM\ManyToOne(targetEntity=Specifications::class, inversedBy="products", cascade={"persist"})
    * @ORM\JoinColumn(name="Specifications_id", referencedColumnName="id",onDelete="SET NULL")
    */
    private $specifications;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSpecifications(): ?Specifications
    {
        return $this->specifications;
    }

    public function setSpecifications(?Specifications $specifications): self
    {
        $this->specifications = $specifications;

        return $this;
    }
}
