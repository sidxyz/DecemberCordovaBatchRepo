@extends('layout')



@section('body')
    <!--//banner-->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- / -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">

        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <div class="intro text-left">
                    <h3 class="main mb-md-5 mb-3">Here is a listing of all our services.</h3>
                    
                </div>
                <div class="row mt-lg-5 mt-md-4 mt-4">

                    @foreach($services as $service)
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas {{$service->icon}} mb-2"></i>
                                <h2 class="my-3">{{$service->heading}}</h6>
                                <h5 class="card-title">{{$service->sub_heading}}</h5>
                                <p class="card-text">{{$service->description}}</p>
                                <br>
                                <hr>
                                <p>Enter your review here</p>
                                <form method="POST" action="addReview">
                                    {{csrf_field()}}
                                <input type="text" name="content" >
                                <input type="hidden" name="service_id" value="{{$service->id}}">
                                <button type="submit">Add Review </button>
                                </form>
                                <br>
                                <h6><b>Existing Reviews:</b></h6>
                                    @foreach ($service->review as $review)
                                    <hr>
                                    <p>{{$review->content}}</p>
                                    </hr>
                                    @endforeach
                                <hr>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <!-- <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">

                                <i class="fas fa-fighter-jet mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Air Freight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-truck mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Land Transport</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-docker mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Supply</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-clock mb-2"></i>

                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Fast & On Time</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-money-bill-alt mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Weather Insuarance</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </section>
    <!--services-->
        <!-- /services -->
    <section class="banner-bottom-w3ls bg-dark py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center text-white mb-md-5 mb-4">We Offered Services</h3>
                <div class="row middle-grids">
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-archive mb-2"></i>
                                <h5 class="card-title my-3">Storage</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-signal mb-2"></i>
                                <h5 class="card-title my-3">Trucking Services</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-users mb-2"></i>
                                <h5 class="card-title my-3">Expert Staff</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-->
    <!--/featured-->
    <section class="banner-bottom-w3ls py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-4">
                <h3 class="tittle text-center mb-md-5 mb-4">
                    Featured Services</h3>
                <!--/services-grids-->
                <div class="row blog-sec">
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g2.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">Consectetur</span>
                                    <h5 class="card-title text-uppercase mt-2">Vivamus id tempor felis. Cras sagittis mi sit amet </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g3.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">Consectetur</span>
                                    <h5 class="card-title text-uppercase mt-2">Vivamus id tempor felis. Cras sagittis mi sit amet </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g4.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">Consectetur</span>
                                    <h5 class="card-title text-uppercase mt-2">Vivamus id tempor felis. Cras sagittis mi sit amet </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//featured-->

    <!--/newsletter-->
@endsection


@section('scripts')
<script type="text/javascript">
    //alert("Hello World");
</script>