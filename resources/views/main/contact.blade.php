@extends('layouts.app')

@section('content')



    <div class="container text-center">
        <div class="row">

            <div class="col-md-12 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Poser une question</h2>
                <p class="text-muted">If you have trouble with this service, please <a href="mailto:angela_asere@yahoo.fr">Demander de l'aide</a> </p>

                <form action="{{url('contact')}}" method="post">
                    @csrf
                    <div class="form-group {{$errors->has ('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                        {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
                    </div>


                    <div class="form-group {{$errors->has ('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                        {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
                    </div>


                    <div class="form-group {{$errors->has ('message') ? 'has-error' : '' }}">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
                        {!!$errors->first('message', '<span class="help-block">:message</span>')!!}
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                    </div>
            </div>


        </div>
    </div>


@endsection
