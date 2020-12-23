@extends('layout')
@section('content')

<section class="second_nav">


</section>

<section class="student_table">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Classe</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($utilisateurs as $utilisateur)
        <tr>{{$utilisateur->email}}<tr>
      @endforeach

</section>

        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection