@extends('layouts.app')
   @section('extra-js')
   <script src="https://www.google.com/recaptcha/api.js"></script>
   @endsection

  @section('content')

    <div class="container">
        <h1>Créer un topic</h1>
        <hr>
        <form action="{{route('topics.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre du topic</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                       name="title" id="title">
                @error('title')
                <div class="invalid-feedback">{{$errors->first('title')}}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="content">Votre sujet</label>
                <textarea name="content" id="content" class="form-control @error('content')
                    is-invalid @enderror" rows="5"></textarea>
                @error('content')
                <div class="invalid-feedback">{{$errors->first('content')}}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SECRET')}}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Créer un topic</button>
        </form>

    </div>



@endsection
