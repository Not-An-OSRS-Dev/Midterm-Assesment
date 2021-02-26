<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\ProductModel;
use App\Services\Business;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    //Creates a product model from the request data 
    //and returns the success view with the new model instance
    public function index()
    {
        //Take form values from request
        $name = request()->get('name');
        $year = request()->get('year');
        $designer = request()->get('designer');
        $price = request()->get('price');
        
        //Create product model and initialize properties
        $product = new ProductModel($year, $designer, $name, $price);
        
        $businessLayer = new Business();
        
        $stringFound = $businessLayer->compare($product);
        
        //Array to be sent to the success view
        $data = [
            'product' => $product,
            'found' => $stringFound,
        ];
        
        //Return success view
        return view('assesment')->with($data);
    }
}
