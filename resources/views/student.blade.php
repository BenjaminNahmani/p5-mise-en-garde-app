@foreach ($students as $student)
<tr>
  <th scope="row">{{$student->id}}</th>
  <td>{{$student->lastname}}</td>
  <td>{{$student->firstname}}</td>
  <td>{{$student->classe}}</td>
  <td>{{$student->megnumber}}</td>
  <td>
    <!-- Call to action buttons -->
    <ul class="list-inline m-0">
        <li class="list-inline-item">
            <button class="btn btn-primary btn-sm rounded-0 btn-meg" id="meg_js" type="button" data-student="{{$student->id}}"   data-toggle="modal"  data-target="#modalMeg{{$student->id}}" title="Créer une mise en garde"><i class="fa fa-table"></i></button>
        </li>
        <li class="list-inline-item">
          <a class="btn btn-danger btn-sm rounded-0 btn-meg" data-toggle="tooltip" href="{{ route('student_delete', ['id' => $student->id])}}" data-placement="top" title="Supprimer l'élève du tableau" ><i class="fa fa-trash"></i></a>
        </li>
   
          <!-- Modal -->
          <div class="modal fade modalMeg" id="modalMeg{{$student->id}}" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <form action="/meg_create" method="POST">
                {{ csrf_field() }}

                <div class="modal-content">
                  <div class="modal-header">
                    
                    <h4 class="modal-title">Incident pour {{$student->firstname}} {{$student->lastname}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <input type="hidden" name="student" class="studentValue" value="{{$student->id}}">

                    <p id="error-modal" class="text-danger"></p>

                    <div class="form-group meg_create_input">
                        <label for="exampleFormControlTextarea1">Incident avec l'élève</label>
                        <textarea class="form-control meg_textarea" id="incident{{$student->id}}" rows="3" cols="6" name="incident"></textarea>
                    </div>
                    <div class="backend-error"></div>

                  </div>

                  <div class="modal-footer">
                    <button type="submit" data-student="{{$student->id}}" class="btn btn-primary mb-2 form-meg">Envoyer la mise en garde</button>

                  </div>
                </div>
              </form>
              
            </div>
          </div>
          
 


    </ul>
</td>
</tr>

@endforeach