@extends('layout_admin')

@section('admin_content')
<div class="container">
    <form class="section" action="/add_student" method="POST" >
        {{ csrf_field() }}

        <div class="form-row">
          <div class="col">

            <input type="text" class="form-control" placeholder="Nom de famille" name="lastname" required>
            @if ($errors->has('lastname'))
              <p class="help is-danger">{{ $errors->first('lastname') }}</p>
            @endif

            <input type="text" class="form-control" placeholder="Prénom" name="firstname" required>
            @if ($errors->has('firstname'))
              <p class="help is-danger">{{ $errors->first('firstname') }}</p>
            @endif

            <input type="text" class="form-control" placeholder="Classe" name="classe" required>
            @if ($errors->has('classe'))
              <p class="warning">{{ $errors->first('classe') }}</p>
            @endif
            
          </div>
          <input type="hidden" name="megnumber" value="0">
          <button type="submit" class="btn btn-primary">Inscrire</button>
        </div>
    </form>
</div>
@endsection
