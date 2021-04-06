@extends('layouts.app')

@section('content')

    <div class="container">
        <br><br>
        <div class="row">
            @foreach($disques as $disque)
                <div class="col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="{{url('image',$disque->image)}}" class="card-img">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h2><?php echo ucwords($disque->title); ?></h2>
                    <h2 class="text-danger">$ {{$disque->author}}</h2>
                    <h5>{{$disque->code}}</h5>
                    <h3 class="text-danger">{{$disque->price}} € </h3>
                    <h5>{{$disque->description}}</h5>
                    <a href="{{url('card/addItem',$disque->id)}}" class="btn btn-sm btn-outline-secondary">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                    <br><br>

                  {{--  <!--form action="{{route('addToWishList')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" value="{{$product->id}}" name="pro_id">
                        <button type="submit" class="btn btn-default">Add to Wishlist</button>
                    </form-->
                  --}}

                </div>

            @endforeach


        </div>
    </div>



@endsection
