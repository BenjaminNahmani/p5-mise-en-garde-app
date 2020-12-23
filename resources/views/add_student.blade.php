@extends('layout_admin')

@section('admin_content')
<div class="container">
    <form class="section" action="/add_student" method="POST" >
        {{ csrf_field() }}

        <div class="form-row">
          <div class="col">

            <input type="text" class="form-control" placeholder="Nom de famille" name="firstname">
            @if ($errors->has('firstname'))
              <p class="help is-danger">{{ $errors->first('firstname') }}</p>
            @endif

            <input type="text" class="form-control" placeholder="Prénom" name="lastname">
            @if ($errors->has('lastname'))
              <p class="help is-danger">{{ $errors->first('lastname') }}</p>
            @endif

            <input type="text" class="form-control" placeholder="Classe" name="classe">
            @if ($errors->has('classe'))
              <p class="warning">{{ $errors->first('classe') }}</p>
            @endif

            <input id="prodId" name="megnumber" type="hidden" value="xm234jq">
          </div>
          <button type="submit" class="btn btn-primary">Inscrire</button>
        </div>
    </form>
</div>
@endsection
