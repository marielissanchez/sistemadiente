<?php require_once "menu.php"?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modal!</title>
  </head>
  <body>
    <div class="container text-center" style="width: 1900px; position: absolute;">
    <h1>ventadal(Emergente)!</h1>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Abrir ventana modal</button>

    </div>
   
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 888px; margin-top: 29px; position: absolute; left:-133px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="left: 322px; position: absolute;">Registrar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 2px; left: 480px;">Número de Historia de Pacientes:</label>
            <input type="number" class="form-control" id="recipient-name" placeholder="Número de Historia:" required=""  style="width: 212px; top: 49px; left: 539px; position: absolute;">
          </div>

         
           <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 12px; left: 10px;">Nombres:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Nombres de Paciente:" required=""  style="width: 632px; top: 29px; left: 109px; position: absolute;">
          </div>

<div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 7px; left: 10px;">Apellidos:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Apellidos de Paciente:" required=""  style="width: 632px; top: 73px; left: 109px; position: absolute;">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -5px; left: 10px;">Cedula:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Cedula de Paciente:" required=""  style="width: 632px; top: 116px; left: 109px; position: absolute;">
          </div>


          <div class="form-group" style="margin-bottom: 15px; ">
                    <label for="ocupacion" class="col-md-3 control-label" style="left:3px; top: 157px; position: absolute; ">Nacionalidad:</label>
                    <div class="col-md-9" style="margin-bottom: 15px; ">
                          <select class="form-control" style="top: 160px;  position: absolute; left:115px; width: 627px;" name="ocupacion">
                     <option disabled="disabled" selected="selected">Nacionalidad</option>  <option>Venezolano</option> 
                        <option>Extrajeros</option> 
                         <option>Otros</option> 
                  </select>  
                        </div>
                    </div>


                    <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 21px; left: 10px;">Dirección:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Dirección de Paciente:" required=""  style="width: 632px; top: 202px; left: 109px; position: absolute;">
          </div>



          <div class="form-group" style="margin-bottom: 15px; ">
                    <label for="ocupacion" class="col-md-3 control-label" style="left:19px; top: 247px; position: absolute; ">Sexo:</label>
                    <div class="col-md-9" style="margin-bottom: 15px; ">
                          <select class="form-control" style="top: 246px;  position: absolute; left:115px; width: 627px;" name="ocupacion">
                     <option disabled="disabled" selected="selected">Sexo</option>  <option>Femenino</option> 
                        <option>Masculino</option> 
                  </select>  
                        </div>
                    </div>

                          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 61px; left: 10px;">Edad:</label>
            <input type="number" class="form-control" id="recipient-name" placeholder="Ingresar Edad de Paciente:" required=""  style="width: 632px; top: 292px; left: 109px; position: absolute;">
          </div>

          <div class="form-group" style="margin-bottom: 15px; ">
                    <label for="ocupacion" class="col-md-3 control-label" style="left:3px; top: 157px; position: absolute; ">Ocupacion:</label>
                    <div class="col-md-9" style="margin-bottom: 15px; ">
                          <select class="form-control" style="top: 360px;  position: absolute; left:115px; width: 627px;" name="ocupacion">
                     <option disabled="disabled" selected="selected">Ocupacion</option>  <option>Estudiantes</option> 
                        <option>profesores</option> 
                         <option>Personal Administrativo</option>
                         <option>Familiares</option> 
                  </select>  
                        </div>
                    </div>
                 


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="top: 271px; position: absolute; left: 343px; width: 171px;">Cerrar</button>
        <button type="button" class="btn btn-primary" style="top: 271px; position: absolute;width: 171px; right: 51px;">Guardar</button>
      </div>
     
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>