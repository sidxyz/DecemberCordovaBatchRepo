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
    		return "product addition Failed! Exception is = ".$e;	
    	}
    }

    public function showAllProducts()
    {
		try
		{
			$product = Product::All(); 
        	$productsArray = $product->all();    
        	return $productsArray;
		}
		catch(Exception $e)
		{
			return "product display Failed! Exception is = ".$e;	
		}
        
	}
	
	public function deleteProduct($id)
	{
		try
		{
			$id = (int)$id;
			Product::destroy($id);
			return "product Deleted Successfully";
		}
		catch(Exception $e)
		{
			return "product deletion Failed! Exception is = ".$e;	
		}
	}
}
