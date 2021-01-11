@extends('index')
@section('content')

<div class="school_form">
    <figure class="school_index">
      <img src="{{URL::asset('/img/ecole.png')}}" id="form_img" alt="Logo de l'école" >
    </figure>
  </div>

    <form class="section" action="/inscription" method="POST" id="form-js">
        {{ csrf_field() }}
     
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder={{old('email')}} >
            <div id="emailHelp" class="form-text">Nous ne communiquerons jamais votre mail.</div>

            @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
  
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            
            @if ($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe (confirmation)</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">

            @if ($errors->has('password_confirmation'))
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>

        <p> <a href="/">Retourner à la page de connexion</a> </p>
        <button type="submit" class="btn btn-primary">Demander mes identifiants</button>

    </form>
@endsection