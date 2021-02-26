<?php

//Class to model the product for the midterm assesment
//Author: Thomas Biegel
//2.26.21

namespace App\Models;

class ProductModel
{
    //Properties to model sailboat info
    private $year;
    private $designer;
    private $name;
    private $price;
    
    //Getters and setters
    
    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param string $designer
     */
    public function setDesigner($designer)
    {
        $this->designer = $designer;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    //Constructor method to initialize model values
    public function __construct(int $year, string $designer, string $name, float $price)
    {
        $this->year = $year;
        $this->designer = $designer;
        $this->name = $name;
        $this->price = $price;
    }
}

