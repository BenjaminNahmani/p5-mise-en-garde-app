@extends('layout')

@section('content')

<section class="connexion">
    <form class="section" action="/connexion" method="post" >
        {{ csrf_field() }}
    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder={{old('email')}} aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nous ne comuniquerons jamais votre mail.</div>
    
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
        <p> <a href="/inscription">Demande d'identifiant</a> </p>
        <button type="submit" class="btn btn-primary">Me connecter</button>

      </form>
</section>


@endsection