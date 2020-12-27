<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mise en garde - Chneor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src={{URL::asset('/img/logo.ico') }} alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">Mise en garde</a>
                </ul>
                </div>
            </div>
        </nav>

        <section class="second_nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/admin">Pannel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/add_student">Ajouter un élève</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/meg_create">Créer une mise en garde</a>
                    </li>
                
                  </ul>
                </div>
              </nav>
        </section>

        <div class="admin_content">

            @yield('admin_content')
            
        </div>
    </body>
</html> 
