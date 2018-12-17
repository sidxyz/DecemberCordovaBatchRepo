<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MobileController extends Controller
{
    public function showAppName()
    {
    	return "December Mobile App Name";
    }

    public function addProduct(Request $request)
    {
    	try 
    	{
    		 $requestArray = $request->all();
	    	
	    	 $product = new Product;
	    	 $product['name'] = $requestArray['productName'];
	    	 $product['description'] = $requestArray['productDescription'];
	    	 $product['dimension'] = $requestArray['productDimension'];
	    	 $product['color'] = $requestArray['productColor'];

	    	 $product->save();

	    	 return "product Added!";	
    	} 
    	catch (Exception $e) 
    	{
    		return "product addition Failed! Exception is =".$e;	
    	}
    }
}
