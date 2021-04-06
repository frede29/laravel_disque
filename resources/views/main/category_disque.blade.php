@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <?php $category_name=DB::table('categories')->select('name')->where('id',$idd)->get(); ?>
            <h4>
                Category :
                @foreach($category_name as $c_name)
                    {{$c_name->name}}
                @endforeach
            </h4>
            <br>
            <div class="row">
                @forelse($category_product as $disque)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" alt="Card image cap" src="{{url('image',$disque->image)}}">
                            <div class="card-body">
                                <p> {{$disque->price}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('productDetail',$disque->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                                     
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
