<?php

namespace ProductsBundle\DataObject;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @AccessType("public_method")
 */
class CategoryDto
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $id = '';

    /**
     * @Type("string")
     *
     * @var string
     */
    private $slug;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @var int
     **/
    private $depth;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param int $depth
     *
     * @return self
     */
    public function setDepth(int $depth): self
    {
        $this->depth = $depth;

        return $this;
    }
}
