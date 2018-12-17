<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showServices()
    {
        $services = new Service();
        $services = $services->all();
        return view('servicesBackEnd')->with('services',$services);
    }

    public function deleteService($id)
    {
        Service::Destroy($id);
        return redirect('servicesBackEnd');
    }

    public function updateService($id)
    {
        $service = new Service();
        $service = $service->where('id',$id)->get();
        $service = $service[0]; 
        //dd($service);
        return view('updateServicesBackEnd')->with('service',$service);
    }

    public function updateServicesData(Request $request)
    {
        $service = new Service();
        $service = $service->where('id',$request->id)->get();
        $service = $service[0];
        
        $service->heading = $request->heading;
        $service->sub_heading = $request->sub_heading;
        $service->description = $request->description;
        $service->icon = $request->icon;

        $service->save();

        return redirect('servicesBackEnd');
    }

    public function addReview(Request $request)
    {
        $review = new Review();
        //dd($request->content);
        $review->content = $request->content;
        $review->service_id = $request->service_id;

        $review->save();

        return redirect('services');
    }
}
