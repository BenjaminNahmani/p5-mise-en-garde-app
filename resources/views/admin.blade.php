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
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->lastname}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->classe}}</td>
      <td>
        <!-- Call to action buttons -->
        <ul class="list-inline m-0">
            <li class="list-inline-item">
                <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Créer une mise en garde"><i class="fa fa-table"></i></button>
            </li>
            <li class="list-inline-item">
              <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Supprimer l'élève du tableau" ><i class="fa fa-trash"></i></button>
            </li>

        </ul>
    </td>
    </tr>
  @endforeach

    </tbody>
  </table>

@endsection