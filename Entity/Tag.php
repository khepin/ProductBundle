<?php

namespace Khepin\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Khepin\ProductBundle\Entity\Tag
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="tags")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * @var type 
     */
    private $product;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set product
     *
     * @param Khepin\ProductBundle\Entity\Product $product
     */
    public function setProduct(\Khepin\ProductBundle\Entity\Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return Khepin\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}