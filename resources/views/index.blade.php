@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <section class="my-5">
                <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
                <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <div class="row">
                    <div class="col-md-4">
                    <div class="row mb-3">
                        <div class="col-2">
                        <i class="fa fa-2x fa-flag-checkered deep-purple-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">International</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                        <i class="fa fa-2x fa-flask deep-purple-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Experimental</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                    </div>
                    <div class="row mb-md-0 mb-3">
                        <div class="col-2">
                        <i class="fa fa-2x fa-glass deep-purple-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Relaxing</h5>
                        <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                
                    </div>
                    </div>
                    <div class="col-md-4 text-center">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png" alt="Sample image">
                    </div>
                    <div class="col-md-4">
                
                    <div class="row mb-3">
                
                        <div class="col-2">
                        <i class="fa fa-2x fa-heart deep-purple-text"></i>
                        </div>
                
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Beloved</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                
                    </div>
                
                    <div class="row mb-3">
                
                        <div class="col-2">
                        <i class="fa fa-2x fa-flash deep-purple-text"></i>
                        </div>
                
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Rapid</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                
                    </div>
                    <div class="row">
                        <div class="col-2">
                        <i class="fa fa-2x fa-magic deep-purple-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Magical</h5>
                        <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>

    {{-- restaurants --}}
    <div class="row">
        <div class="col-md-12">
            <section class="text-center my-5">
                <h2 class="h1-responsive font-weight-bold my-5">Our best projects</h2>
                <div class="row d-flex justify-content-center">
                
                    <div class="col-md-6 col-xl-5 mb-4">

                    <div class="view overlay rounded z-depth-2">
                        <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample project image">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="" class="green-text"><h5 class="font-weight-bold mt-2 mb-3"><i class="fa fa-line-chart pr-2"></i>Marketing</h5></a>
                        <h4 class="font-weight-bold mb-3">Title of the news</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit cupidatat proident voluptatem quia numquam.</p>
                        <a class="btn btn-success btn-rounded btn-md"> View more</a>
                    </div>
                    </div>
                    <div class="col-md-6 col-xl-5 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-2">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/19.jpg" class="img-fluid" alt="Sample project image">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body">
                        <a href="" class="blue-text"><h5 class="font-weight-bold mt-2 mb-3"><i class="fa fa fa-eye pr-2"></i>Entertainment</h5></a>
                        <h4 class="font-weight-bold mb-3">Title of the news</h4>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid, aspernatur aut odit aut fugit.</p>
                        <a class="btn btn-success btn-rounded btn-md"> View more</a>
                    </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                
                    <!-- Grid column -->
                    <div class="col-md-6 col-xl-5 mb-md-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-2">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="Sample project image">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-md-0">
                        <a href="" class="brown-text"><h5 class="font-weight-bold mt-2 mb-3"><i class="fa fa-camera pr-2"></i>Travel</h5></a>
                        <h4 class="font-weight-bold mb-3">Title of the news</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                        </p>
                        <a class="btn btn-success btn-rounded btn-md"> View more</a>
                    </div>
                    </div>
                    <!-- Grid column -->
                
                    <!-- Grid column -->
                    <div class="col-md-6 col-xl-5">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-2">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (56).jpg" class="img-fluid" alt="Sample project image">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <a href="" class="cyan-text"><h5 class="font-weight-bold mt-2 mb-3"><i class="fa fa-phone pr-2"></i>Technology</h5></a>
                        <h4 class="font-weight-bold mb-3">Title of the news</h4>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, illum qui dolorem eum fugiat quo voluptas.</p>
                        <a class="btn btn-success btn-rounded btn-md"> View more</a>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- contact us --}}
    <div class="row">
        <div class="col-md-12">
            <!-- Section: Contact v.2 -->
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
            
            <!-- Grid row -->
            <div class="row">
            
                <!-- Grid column -->
                <div class="col-md-9 mb-md-0 mb-5">
            
                <form>
            
                    <!-- Grid row -->
                    <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <input type="text" id="contact-name" class="form-control">
                        <label for="contact-name" class="">Your name</label>
                        </div>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <input type="text" id="contact-email" class="form-control">
                        <label for="contact-email" class="">Your email</label>
                        </div>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <input type="text" id="contact-Subject" class="form-control">
                        <label for="contact-Subject" class="">Subject</label>
                        </div>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="md-form">
                        <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                        <label for="contact-message">Your message</label>
                        </div>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                </form>
            
                <div class="text-center text-md-left">
                    <a class="btn btn-primary btn-md">Send</a>
                </div>
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                    <i class="fa fa-map-marker fa-2x blue-text"></i>
                    <p>San Francisco, CA 94126, USA</p>
                    </li>
                    <li>
                    <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
                    <p>+ 01 234 567 89</p>
                    </li>
                    <li>
                    <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
                    <p class="mb-0">contact@example.com</p>
                    </li>
                </ul>
                </div>
                <!-- Grid column -->
            
            </div>
            <!-- Grid row -->
            
            </section>
            <!-- Section: Contact v.2 -->
        </div>
    </div>
</div>
@endsection