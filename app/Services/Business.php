<?php

//Class for business layer
//Author: Thomas Biegel
//2.26.21


namespace App\Services;

use App\Models\ProductModel;

class Business
{
    //Product passed into the business layer
    private $product;
    
    //Default constructor
    public function __construct()
    {
        
    }
    
    //Method to find the specified string in the product fields
    public function compare(ProductModel $product)
    {
        //String we want to find
        $find = "CST-256";
        
        //If any of the product fields match return true
        if ($product->getDesigner() == $find || $product->getName() == $find
            || $product->getPrice() == $find || $product->getYear() == $find)
        {
            return true;
        }
        
        //Else return false;
        return false;
    }
}

