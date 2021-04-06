@extends('admin.create')

@section('content')

<main class="col-sm-9 m1-sm-auto col-md-10 pt-3" role="main"><br><br><br>
    <h3>Disques</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">code</th>
                <th scope="col">Price</th>
                <th scope="col">Delete</th>
                <th scope="col">show</th>
            </tr>
            </thead>

            <tbody>

            @foreach($disques as $disque)
            <tr>

                <td><img src="{{url('image',$disque->image)}}" alt="" width="80px"> </td>
                <td>{{$disque->title}}</td>
                <td>{{$disque->author}}</td>
                <td>{{$disque->code}}</td>
                <td>{{$disque->price}}</td>
                <td>
                    <form action="{{url('admin/disque/delete',$disque->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-sm btn-danger" value="delete">
                    </form>
                </td>
                <td>
                    <form action="{{url('productdetail',$disque->id)}}" method="get">
                        {{csrf_field()}}
                        {{method_field('SHOW')}}
                        <input type="submit" class="btn btn-sm btn-success" value="show">
                    </form>
                </td>
            </tr>
         @endforeach
            </tbody>
        </table>

    </div>
</main>
@endsection
