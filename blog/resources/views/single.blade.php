@extends('layout')

@section('style')
    <link href="css/single.css" rel='stylesheet' type='text/css' />

@endsection

@section('body')
    <!--//banner-->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Single Page</li>
    </ol>

    <!-- //breadcrumb -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <div class="row">
                    <!--left-->
                    <div class="col-lg-8 left-blog-info text-left">
                        <div class="blog-grid-top">
                            <div class="b-grid-top">
                                <div class="blog_info_left_grid">
                                    <a href="single.html">
									<img src="images/1.jpg" class="img-fluid" alt="">
								</a>
                                </div>
                            </div>

                            <h3>
                                <a href="single.html">Amet consectetur adipisicing </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
                           
                        </div>

                        <div class="comment-top">
                            <h4>Comments</h4>
                            <div class="media">
                                <img src="images/t1.jpg" alt="" class="img-fluid rounded" />
                                <div class="media-body">
                                    <h5 class="mt-0">Joseph Goh</h5>
                                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>

                                    <div class="media mt-3">
                                        <a class="d-flex pr-3" href="#">
										<img src="images/t2.jpg" alt="" class="img-fluid rounded" />
									</a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Richard Spark</h5>
                                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-top">
                            <h4>Leave a Comment</h4>
                            <div class="comment-bottom">
                                <form action="#" method="post">
                                    <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                                    <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                                    <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">

                                    <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
                                    <button type="submit" class="btn btn-primary submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 right-blog-con text-right">
                        <div class="right-blog-info text-left">
                            <div class="tech-btm">
                                <img src="images/g1.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div class="tech-btm">
                                <h4>Sign up to our newsletter</h4>
                                <p>Pellentesque dui, non felis. Maecenas male </p>
                                <form action="#" method="post">
                                    <input class="form-control" type="email" placeholder="Email" required="">
                                    <input class="form-control" type="submit" value="Subscribe">
                                </form>

                            </div>
                            <div class="tech-btm">
                                <h4>Categories</h4>
                                <ul class="list-group single">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tech-btm">
                                <h4>Top stories of the week</h4>

                                <div class="blog-grids row mb-3">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="single.html">
										<img src="images/g3.jpg" class="img-fluid rounded" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="blog-grids row mb-3">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="single.html">
										<img src="images/g6.jpg" class="img-fluid rounded" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">
                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="single-gd my-5 tech-btm">
                                <h4>Our Progress</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="single-gd tech-btm">
                                <h4>Recent Post</h4>
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="single.html">
										<img src="images/g2.jpg" class="img-fluid rounded" alt="">
									</a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                        </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                    <!--//right-->
                </div>

            </div>
        </div>
    </section>
    <!--/newsletter-->
@endsection
