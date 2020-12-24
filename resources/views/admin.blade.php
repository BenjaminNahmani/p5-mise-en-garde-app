@extends('layout_admin')
@section('admin_content')

  <section class="student_table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Classe</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

  </section>
  @foreach ($students as $student)
    <tr>
      <th scope="row">1</th>
      <td>{{$student->lastname}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->classe}}</td>
      <td><button class="action">Voir le profil</button></td>
    </tr>
  @endforeach

    </tbody>
  </table>

@endsection