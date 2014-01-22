<?php

namespace My\RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 */
class Recipe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $difficulty;

    /**
     * @var string
     */
    protected $description;

    protected $author;
    protected $ingredients;
    
    public function __construct(Author $author, $name, $description, $difficulty) {
        $this->author = $author;
        $this->name = $name;
        $this->description = $description;
        $this->difficulty = $difficulty;
        $this->ingredients = new ArrayCollection();
    }
    public function add(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
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
     * @return Recipe
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
     * Set difficulty
     *
     * @param string $difficulty
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
