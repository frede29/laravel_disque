@extends('admin.create')

@section('content')

            <main class="col-sm-9 m1-sm-auto col-md-10 pt-3" role="main"  ><br><br><br>
                <h3>Add New Product</h3>
                <div class="col-md-6">
                    <div class="panel-body">
                        <form action="{{url('admin/disque/store')}}" method="post" role="form" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group{{$errors->has('title')?' has-error':''}}">
                                <label for="title">tilte</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Disque title">
                                <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('author')?' has-error':''}}">
                                <label for="author">author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="Disque author">
                                <span class="text-danger">{{$errors->first('author')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('code')?' has-error':''}}">
                                <label for="code">code</label>
                                <input type="text" class="form-control" name="code" id="code" placeholder="Disque code">
                                <span class="text-danger">{{$errors->first('code')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('price')?' has-error':''}}">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Disque Price">
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>



                            <div class="form-group{{$errors->has('description')?' has-error':''}}">
                                <label for="pro_info">Description</label>
                                <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach($categories as $id=>$category)
                                        <option value="{{$id}}">{{$category}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('category_id')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            </div><br>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </main>

@endsection
