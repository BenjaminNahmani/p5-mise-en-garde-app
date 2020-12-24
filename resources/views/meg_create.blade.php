@extends('layout_admin')
@section('admin_content')

<main role="main" class="container meg_container">

    <div class="starter-template">
        <div class="school_header">
            <div class="school_pic">
                <img src="{{URL::asset('/img/logo.ico')}}" alt="Logo de l'école">
            </div>

            <div class="school_contact">
                <h1>Ecole élémentaire Renard</h1>
                <p>12 rue de la ferme, 00000, Monde</p>
                <p>01.02.03.04.05</p>
            </div>

            <div class="separate"></div>

        </div>



        <form>
            <div class="row">
              <div class="col-3 meg_create_input">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="Nom de l'élève">
              </div>

              <div class="col-3 meg_create_input">
                <label for="">Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom de l'élève">
              </div>



                <div class="row">
                    <div class="col-3 meg_create_input">
                        <label for="">Nom du professeur</label>
                        <input type="text" class="form-control" placeholder="Nom du professeur">
                    </div>
                </div>

                <div class="col-3">
                    <label for="">Classe</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choisir</option>
                        <option value="1">CP</option>
                        <option value="2">CE1</option>
                        <option value="3">CE2</option>
                        <option value="3">CM1</option>
                        <option value="3">CM2</option>
                    </select>
                </div>
            </div>
            
            <div class="separate"></div>

            <div class="row">
                <div class="form-group meg_create_input">
                    <label for="exampleFormControlTextarea1">Incident avec l'élève</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>
            
            <button type="submit" class="btn btn-primary mb-2">Envoyer la mise en garde</button>
          </form>
@endsection