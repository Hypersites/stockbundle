<?php

namespace Hypersites\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Supplier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hypersites\StockBundle\Entity\SupplierRepository")
 */
class Supplier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true, nullable=false)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_document", type="string", unique=true, nullable=false, length=18)
     *
     */

    private $fiscalDocument;




    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephones", type="string", length=255)
     */
    private $telephones;

    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="suppliers")
     */
    private $products;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->products = new ArrayCollection();
    }


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
     * @return Supplier
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set address
     *
     * @param string $address
     * @return Supplier
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Supplier
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephones
     *
     * @param array $telephones
     * @return Supplier
     */
    public function setTelephones($telephones)
    {
        $this->telephones = $telephones;

        return $this;
    }

    /**
     * Get telephones
     *
     * @return array
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Supplier
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Supplier
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * @return ArrayCollection
    */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     *
     * @param ArrayCollection $products
     * @return \Hypersites\StockBundle\Entity\Supplier
     */
    public function setProducts(ArrayCollection $products)
    {
        $this->products = $products;
        return $this;
    }
    /**
     *
     * @param Product $product
     * @return \Hypersites\StockBundle\Entity\Supplier
     */
    public function addProduct (Product $product)
    {
        $this->products->add($product);
        return $this;
    }

    public function getFiscalDocument()
    {
        return $this->fiscalDocument;
    }

    public function setFiscalDocument($fiscalDocument)
    {
        $this->fiscalDocument = $fiscalDocument;
        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

}
