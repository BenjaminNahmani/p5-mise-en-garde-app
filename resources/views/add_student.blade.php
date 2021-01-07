@extends('layout_admin')

@section('admin_content')
<div class="container add_student_form_container">
      <form class="section" action="/add_student" method="POST" id="form-js" >
        {{ csrf_field() }}

          <div class="mb-3">
            <label for="lastname" class="form-label">Nom de famille</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom de famille" name="lastname" required>
            
            @if ($errors->has('lastname'))
              <p class="warning">{{ $errors->first('lastname') }}</p>
            @endif
          </div>

          <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Prénom" name="firstname" required>
            
            @if ($errors->has('firstname'))
              <p class="warning">{{ $errors->first('firstname') }}</p>
            @endif
          </div>
      
          <div class="mb-3">
            <label for="">Classe</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="classe">
                <option selected>Choisir</option>
                <option value="CP">CP</option>
                <option value="CE1">CE1</option>
                <option value="CE2">CE2</option>
                <option value="CM1">CM1</option>
                <option value="CM2">CM2</option>
             </select>

            @if ($errors->has('classe'))
              <p class="warning">{{ $errors->first('classe') }}</p>
            @endif
            
          </div>
          
          <input type="hidden" name="megnumber" value="0">
          <button type="submit" class="btn btn-primary">Inscrire</button>
        </form>
  </section>
  
</div>
@endsection
