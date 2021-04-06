@extends('admin.create')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline;">List Categories</h3><br>
        <ul class="nav navbar-nav">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $id=>$category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{url('admin/category/delete',$category->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </ul>
        <br><br>
        <form action="{{url('admin/category/store')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Category name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
            </div><br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </main>
    @endsection
