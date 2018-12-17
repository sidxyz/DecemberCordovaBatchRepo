@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Services Here</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <form class="needs-validation" action="/updateServicesData" method="POST" novalidate>
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$service->id}}">
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" id="heading" placeholder="Enter heading here" value="{{$service->heading}}" name="heading" required>
                <div class="invalid-feedback">
                  Valid Heading is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sub_heading">Sub Heading</label>
                <input type="text" class="form-control" id="sub_heading" placeholder="Enter subheading here" value="{{$service->sub_heading}}" name="sub_heading" required>
                <div class="invalid-feedback">
                  Valid Sub Heading is required.
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="description">Description </label>
              <textarea name="description" class="form-control" id="description" placeholder="Enter detailed description here">
                  {{$service->description}}
              </textarea>
              <div class="invalid-feedback">
                Please enter a valid description.
              </div>
            </div>

            <div class="mb-3 form-group">
            <label for="exampleFormControlSelect1">Choose Service Icon</label>
            <select class="form-control" name="icon" id="icon">
              <option value="fa-anchor">fa-anchor</option>
              <option value="fa-truck">fa-truck</option>
              <option value="fa-fighter-jet">fa-fighter-jet</option>
              <option value="fa-docker">fa-docker</option>
              <option value="fa-clock">fa-clock</option>
              <option value="fa-money-bill-alt">fa-money-bill-alt</option>
            </select>
          </div>
            
                <button type="submit" class="btn btn-primary">Update Service</button>
                
   
            </div>
            <hr class="mb-4">
           
          </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script type="text/javascript">
   $(document).ready(function(){
      var elem = document.getElementById('icon');
      elem.value = "{{$service->icon}}";
   })
    
</script>
@endsection