@extends('layouts.app')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{URL::asset('image/slide1.jpg')}}" alt="First slide" height="600px" width="1350px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h3 STYLE="color:white;">Bienvenue sur notre site</h3>
                        <h4 STYLE="color:white;">Vous trouverez plusieurs disques et plusieurs categories musicales.</h4>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{URL::asset('image/slide2.jpg')}}" alt="Second slide" height="600px" width="1350px">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{URL::asset('image/slide3.jpg')}}" alt="Third slide" height="600px" width="1350px">
                <div class="container">
                    <div class="carousel-caption text-right">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @forelse($disques as $disque)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" alt="Card image cap" src="{{url('image',$disque->image)}}" width="250px">
                            <div class="card-body">
                                <p> {{$disque->price}} €</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('productdetail',$disque->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>No Products</h3>
                @endforelse
            </div>
        </div>
    </div>

@endsection
