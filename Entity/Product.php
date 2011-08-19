<?php

namespace Khepin\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Khepin\ProductBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
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
     * @ORM\OneToMany(targetEntity="Tag", mappedBy="product", cascade={"persist"})
     * @var type 
     */
    private $tags;


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
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tags
     *
     * @param Khepin\ProductBundle\Entity\Tag $tags
     */
    public function addTags(\Khepin\ProductBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
        $tags->setProduct($this);
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    public function setTags(\Doctrine\Common\Collections\ArrayCollection $tags){
        $this->tags = $tags;
        foreach ($tags as $tag){
            $tag->setProduct($this);
        }
    }
}