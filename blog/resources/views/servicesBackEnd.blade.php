@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Services Here</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Sub Heading</th>
                      <th scope="col">Description</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($services as $service)
                      <tr>
                        <th scope="row">{{$service->id}}</th>
                        <td>{{$service->heading}}</td>
                        <td>{{$service->sub_heading}}</td>
                        <td>{{$service->description}}</td>
                        <td><i class="fas {{$service->icon}} mb-2"></i></td>
                        <td><a href="/deleteService/{{$service->id}}" style="color:green">Delete</a> || 
                          <a href="/updateService/{{$service->id}}" style="color:green">Edit</a></td>
                      </tr>
                      @endforeach
                     
                </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
