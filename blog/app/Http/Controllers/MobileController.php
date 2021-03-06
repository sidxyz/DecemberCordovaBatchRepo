<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
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
			 
			//dd($requestArray);
	    	
	    	 $product = new Product;
	    	 $product['name'] = $requestArray['productName'];
	    	 $product['description'] = $requestArray['productDescription'];
	    	 $product['dimension'] = $requestArray['productDimension'];
			 $product['color'] = $requestArray['productColor'];
			 $imageExtension = $requestArray['imageExtension'];

			 $imageFullName = time().".".$imageExtension;
			 $base64ImageData = $requestArray['productImage'];
			 $fullPath = public_path('images')."/".$imageFullName;
			 \File::put($fullPath, base64_decode($base64ImageData));
			 //request()->productImage->move(,$imageFullName);
			 $product['image_url']=$fullPath;

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

	public function getProductInfoById($id)
	{
		try
		{
			$id = (int)$id;
			$product = new Product();
			$productInfo = $product->where('id',$id)->get();
			return $productInfo;
		}
		catch(Exception $e)
		{
			return "Finding product info Failed! Exception is = ".$e;	
		}
	}


	public function updateProductData(Request $request)
	{
		try
		{
			$requestArray = $request->all();
	    	//dd($requestArray);
			$product = new Product;
			$productId = (int)$requestArray["id"];

			$product = $product->where('id',$productId)->get();
			$product = $product[0];

			$product['name'] = $requestArray['productName'];
			$product['description'] = $requestArray['productDescription'];
			$product['dimension'] = $requestArray['productDimension'];
			$product['color'] = $requestArray['productColor'];

			$product->save();

			return "product Updated!";	
		}
		catch(Exception $e)
		{
			return "Updating product info Failed! Exception is = ".$e;	
		}
	}
	public function login(Request $request)
	{
		$requestArray = $request->all();
		$valid = false;

		//do something better to verify if username and password are valid
		if($requestArray["username"]=="admin" && $requestArray["password"]=="admin")
		$valid = true;

		if($valid)
		{
			return env('APP_KEY');
		}
		else
		{
			return 'login failed';
		}

	}


}
