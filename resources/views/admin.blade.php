@extends('layout_admin')
@section('admin_content')

  <section class="student_table table-responsive-sm">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Classe</th>
          <th scope="col">Nb M.E.G</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody id="students" >

      </tbody>
    </table>
    
    <div id="loading">
      <figure>
        <img src="{{URL::asset('/img/loading.gif') }}" alt="Chargement...">
      </figure>
    </div>
</section>

  

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{URL::asset('/js/admin.js')}}"></script>