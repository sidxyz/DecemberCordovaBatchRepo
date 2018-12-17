<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Service;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 
    public function contactEmail()
    {

    	$user = new User;
//    	$user = $user->where('id',1)->get();
 //   	$user = $user->first();	
    	$user = $user->all();
    	//dd($user);
    	$address = ['address'=>'California, USA','email'=>'abc@xyz.com','phone'=>'+91 9987786372'];

    	return view('contact')->with('address',$address)->with('users',$user);
    }

    public function addService(Request $request)
    {
    	$service = Service::Create($request->all());
        return redirect('services');
    }

    public function showServices()
    {
    	$services = new Service;
    	$services = $services->all();
    	return view('services')->with('services',$services);
    }
}
